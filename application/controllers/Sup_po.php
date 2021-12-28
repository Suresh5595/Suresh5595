<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sup_po extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Supplier Po';
		$data['content'] = 'purchase/sup_po';
		$this->load->view('layout/temp',$data);
	}
}
