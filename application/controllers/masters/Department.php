<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Department';
		$data['content'] = 'masters/department';
		$this->load->view('layout/temp',$data);
	}
	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_department",
			"where"  => array("dep_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->dep_id,
					"dep_name" => $result->dep_name,
					"dep_status" => $result->dep_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$dep_name= $this->input->post('dep_name');
			$dep_status = $this->input->post('dep_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"dep_name" => $dep_name[$count],
					"dep_status" => $dep_status[$count],
					"dep_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_department",
						   "data"   => $data,
						   "where"  => array("dep_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_department",
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
			   "option" => "delete",
			   "table"  => "rsm_department",
			   "where"  => array("dep_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}

