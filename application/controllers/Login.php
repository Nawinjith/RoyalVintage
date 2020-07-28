<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('Login_model');
        $this->load->library('session');

    }

	public function index()
	{
		$this->load->view('includes/header2.php');
		$this->load->view('login');
		$this->load->view('includes/footer.php');
	}

	function login_user(){ 
		$user=array(
	  
			'email'=>$this->input->post('user_email'),
			'password'=>md5($this->input->post('user_password'))
	  
		);
		$result=$this->Login_model->login_user($user);
		if ($result == TRUE) 
		{
			$newdata = [
				'user_logedin' => TRUE
			];
			
			$this->session->set_userdata($newdata);
			redirect('http://localhost/royalvintage/');
			// $username = $this->input->post('username');
			// $result = $this->login_database->read_user_information($username);
			// if ($result != false) {
			// 	$session_data = array(
			// 	'username' => $result[0]->user_name,
			// 	'email' => $result[0]->user_email,
			// 	);
			// 	// Add user data in session
			// 	$this->session->set_userdata('logged_in', $session_data);
			// 	$this->load->view('admin_page');
			// }
		}
		else
		{
			redirect('login');
		}
	  
	  
	}

	public function logout() {
		$newdata = [
			'user_logedin' => FALSE
		];
		
		$this->session->set_userdata($newdata);
		redirect('http://localhost/royalvintage/');
	 }
}
