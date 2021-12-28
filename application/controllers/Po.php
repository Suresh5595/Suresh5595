<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Po extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Po';
		$data['content'] = 'purchase/po';
		$this->load->view('layout/temp',$data);
	}
}
