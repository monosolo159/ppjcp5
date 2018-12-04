<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		// redirect('Home/productlist');
		$this->load->view('back/template/header');
		// $this->load->view('back/template/sidebar');
		// $this->load->view('back/body');
		// $this->load->view('back/template/footer');
	}
}
