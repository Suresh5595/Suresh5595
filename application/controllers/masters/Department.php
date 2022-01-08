<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Department';
		$data['content'] = 'masters/department';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_department",
			"where"  => array("dep_del" => 0)
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}
	
	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$dep_name= $this->input->post('department_name');
			$dep_status = $this->input->post('department_status');
			$data = array(
				"dep_name" => $dep_name,
				"dep_status" => $dep_status,
				"dep_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($id !=0){
				$options = array(
					"option" => "update",
					"table"  => "rsm_department",
					"data"   => $data,
					"where"  => array("dep_id" => $id)
				);
				$this->session->set_flashdata('success_alert','Data Updated Successfully');
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_department",
						"data"   => $data,
				);
				$this->session->set_flashdata('success_alert','Data Insert Successfully');
			}
			$this->common_model->queries($options);
		}
		redirect('masters/department');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "rsm_department",
			"where"  => array("dep_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_department",
			   "data"   => array("dep_del" => 1),
			   "where"  => array("dep_id" => $id)
		);
		$res = $this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
		echo json_encode($res);
	}
}

