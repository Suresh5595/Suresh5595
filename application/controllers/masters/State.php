<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='State';
		$data['content'] = 'masters/state';
		$this->load->view('layout/temp',$data);
	}
	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_state",
			"where"  => array("state_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->state_id,
					"state_name" => $result->state_name,
					"state_status" => $result->state_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$state_name= $this->input->post('state_name');
			$state_status = $this->input->post('state_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"state_name" => $state_name[$count],
					"state_status" => $state_status[$count],
					"state_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_state",
						   "data"   => $data,
						   "where"  => array("state_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_state",
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
			   "table"  => "rsm_state",
			   "data"   => array("state_del" => 1),
			   "where"  => array("state_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}

