<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_view extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Supplier View';
		$data['content'] = 'masters/supplier/supplier_view';
		$this->load->view('layout/temp',$data);
	}
}
