<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raw_material extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Raw Materials';
		$data['content'] = 'masters/raw_material';
		$this->load->view('layout/temp',$data);
	}

	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_raw_material"
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"id" => $result->raw_material_id,
					"raw_material_code" => $result->raw_material_code,
					"raw_material_name" => $result->raw_material_name,
					"raw_material_status" => $result->raw_material_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$raw_material_code = $this->input->post('raw_material_code');
			$raw_material_name= $this->input->post('raw_material_name');
			$raw_material_status = $this->input->post('raw_material_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"raw_material_code" => $raw_material_code[$count],
					"raw_material_name" => $raw_material_name[$count],
					"raw_material_status" => $raw_material_status[$count],
					"raw_material_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_raw_material",
						   "data"   => $data,
						   "where"  => array("raw_material_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_raw_material",
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
			   "table"  => "rsm_raw_material",
			   "where"  => array("raw_material_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}
