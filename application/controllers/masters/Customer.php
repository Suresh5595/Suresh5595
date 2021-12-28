<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Customer';
		$data['content'] = 'masters/customer/customer';
		$this->load->view('layout/temp',$data);
	}
}
