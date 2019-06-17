<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesperson extends CI_Controller {

	public function index()
	{
		
		$this->load->view('salesperson/salespersonmain.php');
	
	}
}
