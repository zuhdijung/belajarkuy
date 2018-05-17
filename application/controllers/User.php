<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
		$this->load->model('muser');
	}
	// manage function
	public function dashboard(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Dashboard';
		$data['path'] = 'default/user/dashboard';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		
		$data['status'] = 'Active User';
		$data['total_event'] = $this->mod->countWhereData('sharing','id_user',$this->session->userdata('id_user'));
		$this->parser->parse('default/index', $data);	
	}
	public function event(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Event Dibuat';
		$data['path'] = 'default/user/event';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['status'] = 'Active User';

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 10;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('user/event/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('user');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->muser->fetchSharing($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('user'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('default/index', $data);	
		}
		else{
			$data['results'] = $this->mmaster->fetchUserSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->parser->parse('default/index', $data);	
		}
	}
	public function idea(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Ide Baik';
		$data['path'] = 'default/user/idea';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['status'] = 'Active User';
		$this->parser->parse('default/index', $data);	
	}
	public function payment(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Pembayaran';
		$data['path'] = 'default/user/payment';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['status'] = 'Active User';
		$this->parser->parse('default/index', $data);	
	}

	// add function
	public function add_event(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Buat Event Baru';
		$data['path'] = 'default/user/add-event';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['status'] = 'Active User';
		
		$this->parser->parse('default/index', $data);	
	}
	// edit function
	public function edit_profile(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Ubah Profil';
		$data['path'] = 'default/user/edit-profile';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['username'] = $profile['username'];
		$data['email'] = $profile['email'];
		$data['image_user'] = base_url($profile['image_user']);
		
		$data['status'] = 'Active User';

		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('name','Name','required');

		if(!$this->form_validation->run())
			$this->parser->parse('default/index', $data);	
		else{
			$config['upload_path'] = './asset/images/image-user/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';
            $config['file_name'] = 'user-'.$this->mod->urlFriendly($this->input->post('name')).date('Y-m-d_H-i-s');
            $this->load->library('upload',$config);

            if(!$this->upload->do_upload()){
            	// save data
				$data = $_POST;
				$array = array(
						'full_name' => $data['name'],
						'email' => $data['email'],
					);
				$this->mod->editData($array,'user','id_user',$this->session->userdata('id_user'));
				redirect(base_url('user/edit-profile'));
            }
            else{
            	$images = $this->upload->data();
            	$this->load->helper('file');
            	if($profile['image_user'] != '')
            		unlink($profile['image_user']);

				// save data
				$data = $_POST;
				$array = array(
						'full_name' => $data['name'],
						'email' => $data['email'],
						'image_user' => 'asset/images/image-user/'.$images['file_name'],
					);
				$this->mod->editData($array,'user','id_user',$this->session->userdata('id_user'));
				redirect(base_url('user/edit-profile'));
            }
		}
	}
	public function change_password(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Ganti Password';
		$data['path'] = 'default/user/change-password';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['status'] = 'Active User';
		$this->parser->parse('default/index', $data);	
	}
	public function edit_event(){
		
	}
	public function logout(){
		$array = array(
				'username' => NULL,
				'permission' => NULL,
				'id_user' => NULL,
				'login_user' => FALSE
			);
			$this->session->set_userdata($array);
		redirect(base_url('p/login'));
	}
}
