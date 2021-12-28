<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_employee extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Manage Employee';
		$data['content'] = 'masters/employee/manage_employee';
		$this->load->view('layout/temp',$data);
	}
}
