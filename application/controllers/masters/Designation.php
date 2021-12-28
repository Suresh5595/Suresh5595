<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Designation';
		$data['content'] = 'masters/designation';
		$this->load->view('layout/temp',$data);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_department",
			"where"  => array("dep_del" => 0)
		);
		$data['departments'] = $this->common_model->queries($options);
	}
	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_designation",
			"where"  => array("des_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->des_id,
					"des_dep" => $result->department_id_fk,
					"des_name" => $result->des_name,
					"des_status" => $result->des_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$des_dep= $this->input->post('des_dep');
			$des_name= $this->input->post('des_name');
			$des_status = $this->input->post('des_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"department_id_fk" => $des_dep[$count],
					"des_name" => $des_name[$count],
					"des_status" => $des_status[$count],
					"des_del" => 0,
					"des_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_designation",
						   "data"   => $data,
						   "where"  => array("des_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_designation",
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
			   "table"  => "rsm_designation",
			   "where"  => array("des_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}
