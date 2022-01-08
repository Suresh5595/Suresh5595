<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hsn extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Hsn';
		$data['content'] = 'masters/hsn';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_hsn",
			"where"  => array("hsn_del" => 0)
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$hsn_name= $this->input->post('hsn_code');
			$hsn_status = $this->input->post('hsn_status');
			$data = array(
				"hsn_name" => $hsn_name,
				"hsn_status" => $hsn_status,
				"hsn_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($id !=0){
				$options = array(
					"option" => "update",
					"table"  => "rsm_hsn",
					"data"   => $data,
					"where"  => array("hsn_id" => $id)
				);
				$this->session->set_flashdata('success_alert','Data Updated Successfully');
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_hsn",
						"data"   => $data,
				);
				$this->session->set_flashdata('success_alert','Data Insert Successfully');
			}
			$this->common_model->queries($options);
		}
		redirect('masters/hsn');
		
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "rsm_hsn",
			"where"  => array("hsn_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_hsn",
			   "data"   => array("hsn_del" => 1),
			   "where"  => array("hsn_id" => $id)
		);
		$res = $this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
		echo json_encode($res);
	}
}

