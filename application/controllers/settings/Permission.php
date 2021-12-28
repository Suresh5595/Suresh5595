<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Permission';
		$data['content'] = 'settings/permission';
		$this->load->view('layout/temp',$data);
	}
}
