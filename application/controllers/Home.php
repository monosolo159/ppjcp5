<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		// redirect('Home/productlist');
		$this->load->view('front/template/header');
		$this->load->view('front/body');
		$this->load->view('front/template/footer');
	}
}
