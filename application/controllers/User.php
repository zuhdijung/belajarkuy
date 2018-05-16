<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
	}
	public function dashboard(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Dashboard';
		$data['path'] = 'default/user/dashboard';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		
		$data['status'] = 'Active User';
		$this->parser->parse('default/index', $data);	
	}
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
		
		$data['status'] = 'Active User';
		$this->parser->parse('default/index', $data);	
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
	public function event(){
		if($this->session->userdata('login_user') == FALSE){
			redirect(base_url('p/login/'));
		}
		$data['title'] = 'Belajar Kuy - Event Dibuat';
		$data['path'] = 'default/user/event';

		$profile = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
		$data['name'] = $profile['full_name'];
		$data['status'] = 'Active User';
		$this->parser->parse('default/index', $data);	
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
