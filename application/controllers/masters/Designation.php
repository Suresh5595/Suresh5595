<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Designation';
		$data['content'] = 'masters/designation';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_department",
			"where"  => array("dep_del" => 0)
		);
		$data['departments'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_designation",
			"where"  => array("des_del" => 0)
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$des_dep= $this->input->post('department_id');
			$des_name= $this->input->post('designation_name');
			$des_status = $this->input->post('designation_status');
			$data = array(
				"department_id_fk" => $des_dep,
				"des_name" => $des_name,
				"des_status" => $des_status,
				"des_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($id !=0){
				$options = array(
					"option" => "update",
					"table"  => "rsm_designation",
					"data"   => $data,
					"where"  => array("des_id" => $id)
				);
				$this->session->set_flashdata('success_alert','Data Updated Successfully');
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_designation",
						"data"   => $data,
				);
				$this->session->set_flashdata('success_alert','Data Insert Successfully');
			}
			$this->common_model->queries($options);
		}
		redirect('masters/designation');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "rsm_designation",
			"where"  => array("des_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_designation",
			   "data"   => array("des_del" => 1),
			   "where"  => array("des_id" => $id)
		);
		$res = $this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
		echo json_encode($res);
	}
}

