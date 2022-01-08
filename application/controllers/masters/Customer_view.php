<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_view extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Customer View';
		$data['content'] = 'masters/customer/customer_view';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_customer",
			"where"  => array("cus_del" => 0)
		);
		$data['customers'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_customer",
			   "data"   => array("cus_del" => 1),
			   "where"  => array("customer_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}
