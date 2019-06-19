<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$this->load->view('shop/shopmain.php');
	}

	public function add_order()
	{
		$this->load->view('shop/shopaddorder.php');
	}

	public function sales_history()
	{
		$this->load->view('shop/shopsaleshistory.php');
	}

	public function make_payment()
	{
		$this->load->view('shop/shopmakepayment.php');
	}

	public function sales_predict()
	{
		$this->load->view('shop/shopsalespredict.php');
	}
}
