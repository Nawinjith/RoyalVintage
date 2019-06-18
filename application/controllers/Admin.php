<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{	
		$this->load->view('admin/adminmain.php');
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