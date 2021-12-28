<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Rule';
		$data['content'] = 'settings/rule';
		$this->load->view('layout/temp',$data);
	}
}
