<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_po extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Customer Po';
		$data['content'] = 'purchase/customer_po';
		$this->load->view('layout/temp',$data);
	}
}
