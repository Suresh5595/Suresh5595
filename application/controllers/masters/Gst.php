<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gst extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Gst';
		$data['content'] = 'masters/gst';
		$this->load->view('layout/temp',$data);
	}
	public function getlist(){
		$response = [];
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_gst",
			"where"  => array("gst_del" => 0)
		);
		$results = $this->common_model->queries($options);
		if($results){
			foreach($results as $key => $result){
				$response[] = array(
					"s_no" => ($key+1),
					"id" => $result->gst_id,
					"gst_name" => $result->gst_name,
					"gst_status" => $result->gst_status
				);
			}
		}

		echo json_encode($response);
	}

	public function update(){ 
		if($this->input->post('hidden_id')){
			$id= $this->input->post('hidden_id');
			$gst_name= $this->input->post('gst_name');
			$gst_status = $this->input->post('gst_status');
			for($count = 0; $count < count($id); $count++){
				$data = array(
					"gst_name" => $gst_name[$count],
					"gst_status" => $gst_status[$count],
					"gst_del" => 0,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id[$count] !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "rsm_gst",
						   "data"   => $data,
						   "where"  => array("gst_id" => $id[$count])
					 );
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "rsm_gst",
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
			   "table"  => "rsm_gst",
			   "data"   => array("gst_del" => 1),
			   "where"  => array("gst_id" => $id)
		);
		$this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
	}
}

