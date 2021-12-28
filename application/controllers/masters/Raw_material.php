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
					"id" => $result->item_id,
					"item_code" => $result->item_code,
					"item_name" => $result->item_name,
					"item_status" => $result->item_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$item_code = $this->input->post('item_code');
			$item_name= $this->input->post('item_name');
			$item_status = $this->input->post('item_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"item_code" => $item_code[$count],
					"item_name" => $item_name[$count],
					"item_status" => $item_status[$count],
					"item_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_raw_material",
						   "data"   => $data,
						   "where"  => array("item_id" => $id[$count])
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
			   "where"  => array("item_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}
