<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Customer';
		$data['content'] = 'masters/customer/customer';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_state",
			"where"  => array("state_del" => 0)
		);
		$data['states'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}
}
