<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Menus';
		$data['content'] = 'settings/menu';
		$this->load->view('layout/temp',$data);
	}
}
