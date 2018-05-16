<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data['title'] = 'Belajar Kuy - Ruang Kolaburasi untuk Belajar Jadi Baik!';
		$data['path'] = 'default/module/home';
		
		$this->parser->parse('default/index', $data);
	}
}
