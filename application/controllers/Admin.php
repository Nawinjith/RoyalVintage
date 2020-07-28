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
		$this->load->view('includes/header2.php');
		$this->load->view('admin/adminmain.php');
		$this->load->view('includes/footer.php');
	}
	public function warehouseIndex(){
		$this->load->view('includes/header.php');
		$this->load->view('admin/warehouseIndex.php');
		// $this->load->view('includes/footer.php');
	}

	public function viewStock()
	{	
		
		$this->load->view('includes/header.php');
		$item = new Warehouse_model;
		$data['data']=$item->viewStock();
		$this->load->view('admin/viewStock',$data);
		$this->load->view('includes/footer.php');
	}
	public function Edit($importNo){ 

		$product_import = $this->db->get_where('product_import',array('importNo' => $importNo))->row();
		$this->load->view('includes/header.php');
		$this->load->view('admin/updateStock',array('product_import'=>$product_import));
		$this->load->view('includes/footer.php');
	}
	public function updateStock($importNo){
		$items = new Warehouse_model;
		$items->updateStock($importNo);
		redirect(site_url('admin/viewStock'));
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

		$item= new Warehouse_model;
		$data['data']=$item->warehouseDetails();
		// $this->load->view('includes/header.php');
		// echo "cdcadscasd";
		$this->load->view('admin/warehouseDetails',$data);
	}

}