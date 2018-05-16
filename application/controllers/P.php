<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mpage');
	}
	public function login(){
		$data['title'] = 'Belajar Kuy - Login';
		$data['path'] = 'default/module/login';

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|callback_validLogin');
		if(!$this->form_validation->run()){
			$this->parser->parse('default/index', $data);
		}
		else{
			redirect(base_url('user/dashboard'));
		}
	}
	function validLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->mpage->validLogin($username,$password);
		if($result != FALSE){
			$array = array(
				'username' => $this->input->post('username'),
				'permission' => $result['permission'],
				'id_user' => $result['id_user'],
				'login_user' => TRUE
			);
			$this->session->set_userdata($array);
			return true;
		}
		else{
			$this->form_validation->set_message('validLogin','Username / Password Tidak Ditemukan');
			return false;
		}
	}
}
