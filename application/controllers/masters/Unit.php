<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Unit';
		$data['content'] = 'masters/unit';
		$this->load->view('layout/temp',$data);
	}
	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_unit",
			"where"  => array("unit_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->unit_id,
					"unit_name" => $result->unit_name,
					"unit_status" => $result->unit_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$unit_name= $this->input->post('unit_name');
			$unit_status = $this->input->post('unit_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"unit_name" => $unit_name[$count],
					"unit_status" => $unit_status[$count],
					"unit_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_unit",
						   "data"   => $data,
						   "where"  => array("unit_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_unit",
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
			   "table"  => "rsm_unit",
			   "data"   => array("unit_del" => 1),
			   "where"  => array("unit_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}
