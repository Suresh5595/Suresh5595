<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Purchase';
		$data['content'] = 'purchase/purchase';
		$this->load->view('layout/temp',$data);
	}
}
