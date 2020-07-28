<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct(){

        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('Register_model');
        $this->load->library('session');

    }

	public function index()
	{
		$this->load->view('includes/header2.php');
		$this->load->view('signup');
		$this->load->view('includes/footer.php');
    }
    
    public function register_user(){

        $user=array(
        'name'=>$this->input->post('user_name'),
        'userID'=>$this->input->post('user_id'),
        'password'=>md5($this->input->post('user_password')),
        'userType'=>$this->input->post('user_type'),
        'email'=>$this->input->post('user_email'),
        'address'=>$this->input->post('user_address'),
        'contactNoMobile '=>$this->input->post('user_mobile'),
        'contactNoResidential'=>$this->input->post('user_residential'),
          );
          print_r($user);
  
        $email_check=$this->Register_model->email_check($user['email']);
        
        if($email_check){
            $this->Register_model->insert($user);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            redirect('login');
        
        }
        else{
        
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect('login');
        
        
        }
    }
}
?>