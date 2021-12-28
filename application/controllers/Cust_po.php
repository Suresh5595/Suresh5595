<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cust_po extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Customer Po';
		$data['content'] = 'purchase/cust_po';
		$this->load->view('layout/temp',$data);
	}
}
