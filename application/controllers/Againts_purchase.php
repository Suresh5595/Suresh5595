<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Againts_purchase extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Againts Purchase';
		$data['content'] = 'purchase/againts_purchase';
		$this->load->view('layout/temp',$data);
	}
}
