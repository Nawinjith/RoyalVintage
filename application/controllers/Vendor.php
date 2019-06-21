<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	public function index()
	{	
		$this->load->view('vendor/vendormain.php');
	}

	public function view_importorders()
	{	
		$this->load->view('vendor/importorders.php');
	}

	public function view_warehouse()
	{	
		$this->load->view('vendor/warehouse.php');
	}

	public function view_history()
	{	
		$this->load->view('vendor/saleshistory.php');
	}

	
}
