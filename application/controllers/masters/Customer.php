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

	public function update(){
		if($this->input->post('submit')){
			$customer_id = $this->input->post('customer_id');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$state = $this->input->post('state');
			$contact = $this->input->post('contact');
			$gst_no = $this->input->post('gst_no');
			$pan_no = $this->input->post('pan_no');
			$status = $this->input->post('status');
			$address = $this->input->post('address');
			$spoc_name = $this->input->post('spoc_name');
			$spoc_email = $this->input->post('spoc_email');
			$spoc_designation = $this->input->post('spoc_designation');
			$spoc_contact = $this->input->post('spoc_contact');

			$data = array(
				"name" => $name,
				"email" => $email,
				"state_id_fk" => $state,
				"contact" => $contact,
				"gst_no" => $gst_no,
				"pan_no" => $pan_no,
				"status" => $status,
				"address" => $address,
				"spoc_name" => $spoc_name,
				"spoc_email" => $spoc_email,
				"spoc_designation" => $spoc_designation,
				"spoc_contact" => $spoc_contact,
				"cus_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($customer_id !=0){
				$options = array(
					"option" => "update",
					"table"  => "rsm_customer",
					"data"   => $data,
					"where"  => array("customer_id" => $customer_id)
				);
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_customer",
						"data"   => $data,
				);
			}
			$this->common_model->queries($options);
		}else{
			$this->index();
		}
	}
}
