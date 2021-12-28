<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hsn extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Hsn';
		$data['content'] = 'masters/hsn';
		$this->load->view('layout/temp',$data);
	}

	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_hsn",
			"where"  => array("hsn_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->hsn_id,
					"hsn_name" => $result->hsn_name,
					"hsn_status" => $result->hsn_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$hsn_name= $this->input->post('hsn_name');
			$hsn_status = $this->input->post('hsn_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"hsn_name" => $hsn_name[$count],
					"hsn_status" => $hsn_status[$count],
					"hsn_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_hsn",
						   "data"   => $data,
						   "where"  => array("hsn_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_hsn",
						   "data"   => $data,
					);
				}
				$this->common_model->queries($options);
			}
		}
		$this->session->set_flashdata('success_alert','Data Updated Successfully');
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_hsn",
			   "data"   => array("hsn_del" => 1),
			   "where"  => array("hsn_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}
