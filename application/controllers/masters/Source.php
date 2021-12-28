<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Source extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Source';
		$data['content'] = 'masters/source';
		$this->load->view('layout/temp',$data);
	}
	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_source",
			"where"  => array("source_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->source_id,
					"source_name" => $result->source_name,
					"source_status" => $result->source_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$source_name= $this->input->post('source_name');
			$source_status = $this->input->post('source_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"source_name" => $source_name[$count],
					"source_status" => $source_status[$count],
					"source_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_source",
						   "data"   => $data,
						   "where"  => array("source_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_source",
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
			   "table"  => "rsm_source",
			   "where"  => array("source_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}


