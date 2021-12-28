<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Dashboard';
		$data['content'] = 'dashboard';
		$this->load->view('layout/temp',$data);
	}
}
