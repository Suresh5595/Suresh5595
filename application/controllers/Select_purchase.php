<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select_purchase extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Select Purchase';
		$data['content'] = 'purchase/select_purchase';
		$this->load->view('layout/temp',$data);
	}
}
