<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Po_view extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='PO View';
		$data['content'] = 'purchase/po_view';
		$this->load->view('layout/temp',$data);
	}
}
