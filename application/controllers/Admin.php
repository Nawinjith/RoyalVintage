<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
	parent::__construct();

	$this->load->model('Warehouse_model');
	}

	public function index()
	{	
		$this->load->view('admin/adminmain.php');
	}
	public function warehouseIndex(){
		$this->load->view('includes/header2.php');
		$this->load->view('admin/warehouseIndex.php');
	}

	public function viewStock()
	{	
		// $this->load->view('includes/header2.php');


		$item = new Warehouse_model;
		$data['data']=$item->viewStock();
		$this->load->view('admin/viewStock',$data);
		// $this->load->view('includes/footer.php');
	}

	public function salesHistory()
	{
		// $this->load->view('includes/header2.php');
		$this->load->view('admin/salesHistory.php');
	// 	$this->load->view('includes/footer.php');
	}

	public function paymentHistory()
	{
		// $this->load->view('includes/header2.php');
		$this->load->view('admin/paymentHistory.php');
		// $this->load->view('includes/footer.php');
	}

	public function warehouseDetails(){
		$this->loas->view('admin/warehouseDetails.php');
	}

}