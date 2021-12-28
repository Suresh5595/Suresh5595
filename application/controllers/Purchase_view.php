<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_view extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Purchase View';
		$data['content'] = 'purchase/purchase_view';
		$this->load->view('layout/temp',$data);
	}
}
