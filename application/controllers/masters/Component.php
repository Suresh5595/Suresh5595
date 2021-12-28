<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Component';
		$data['content'] = 'masters/component';
		$this->load->view('layout/temp',$data);
	}
public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_component",
			"where"  => array("component_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->item_id,
					"component_item" => $result->component_item,
					"component_name" => $result->component_name,
					"component_description"=> $result->component_name,
					"component_status" => $result->component_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$component_item = $this->input->post('component_item');
			$component_name= $this->input->post('component_name');
			$component_status = $this->input->post('component_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"component_item" => $component_item[$count],
					"component_name" => $component_name[$count],
					"component_status" => $component_status[$count],
					"component_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_component",
						   "data"   => $data,
						   "where"  => array("component_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_component",
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
			   "table"  => "rsm_component",
			   "where"  => array("component_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}

