<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header2.php');
		$this->load->view('login');
		$this->load->view('includes/footer.php');
	}
}
