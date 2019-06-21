<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('register_model');
        $this->load->library('email');
	}
	public function validation(){

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('userName', 'User Name', 'required|trim|is_unique[logintable.userName]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('userID', 'User ID', 'required');
		$this->form_validation->set_rules('userType', 'User Type', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[logintable.email]');
        $this->form_validation->set_rules('address','Address','required|trim|is_unique[logintable.address]');
		$this->form_validation->set_rules('contactNoMobile','Mobile Number','required|trim|is_unique[logintable.contactNoMobile]');
		$this->form_validation->set_rules('contactNoResidential','Residential Number','is_unique[logintable.contactNoResidential]');
        
  
        if($this->form_validation->run()){

            $verifiactionKey = md5(rand());
            $data = array(
                'name'  => $this->input->post('name'),
				'userName'  => $this->input->post('userName'),
				'password' => md5($this->input->post('password')),
				'userID' => $this->input->post('userID'),
				'userType'  => $this->input->post('userType'),
                'email' => $this->input->post('email'),
				'address'   => $this->input->post('address'),
				'contactNoMobile'   => $this->input->post('contactNoMobile'),
				'contactNoResidential'   => $this->input->post('contactNoResidential'),
                'verifiactionKey' => $verifiactionKey
            );

            $id = $this->register_model->insert($data);

            if($id>0){
                //creating the email to send after user register to the system
                $subject =  "Please verify your email to login";
                $message = "
                    <p>Hi ".$this->input->post('userName')."</p>
                        <p>This is email verification mail from Royal Vintage Login Register system. For complete the
                         registration process first you have to verify you email by click this
                        <a href='".base_url()."register/verify_email/".$verifiactionKey."'>link</a>.</p>
                        <p>Once you click this link your email will be verified and you can login into the system.</p>
                    <p>Thanks,</p>
                ";
                //setting up th email to send verification mail
                $config = array(
                    
                    'protocol'  => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' =>  465,
                    'smtp_user' => 'royalvintage97@gmail.com', 
                    'smtp_pass' => 'Dee64#rh', 
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'wordwrap'   => TRUE
                );

                $this->load->library('email',$config);
                $this->email->set_newline("\r\n");
                $this->email->from('royalvintage97@gmail.com');
                $this->email->to($this->input->post('email'));
                $this->email->subject($subject);
                $this->email->message($message);

                if($this->email->send()){
                    $this->session->set_flashdata('message','Check your inbox for verification mail');
                    redirect ('admin/viewStock');
                }
            }
        }else{
            $this->index();
        }
    }

	public function index()
	{	
		$this->load->view('includes/header2.php');
		$this->load->view('admin/adminmain.php');
		$this->load->view('includes/footer.php');
	}

	public function viewStock()
	{	
		$this->load->view('admin/viewStock.php');
	}

	public function salesHistory()
	{
		$this->load->view('admin/salesHistory.php');
	}

	public function paymentHistory(){
		$this->load->view('admin/paymentHistory.php');
	}
// payment history
}