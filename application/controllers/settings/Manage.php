<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Managa Settings';
		$data['content'] = 'settings/manage';
		$this->load->view('layout/temp',$data);
	}
}
