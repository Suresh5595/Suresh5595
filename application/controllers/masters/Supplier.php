<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Supplier';
		$data['content'] = 'masters/supplier/supplier';
		$this->load->view('layout/temp',$data);
	}
}
