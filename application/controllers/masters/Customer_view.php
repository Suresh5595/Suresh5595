<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_view extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Customer View';
		$data['content'] = 'masters/customer/customer_view';
		$this->load->view('layout/temp',$data);
	}
}
