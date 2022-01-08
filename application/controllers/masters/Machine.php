<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Machine extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Machine';
		$data['content'] = 'masters/machine';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_machine",
			"where"  => array("machine_del" => 0)
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$machine_name = $this->input->post('machine_name');
			$operation = $this->input->post('operation');
			$category = $this->input->post('category'); 
			$make = $this->input->post('make'); 
			$machine_status = $this->input->post('machine_status');
			$data = array(
				"machine_name" => $machine_name,
				"operation" => $operation,
				"category" => $category,
				"make" => $make,
				"machine_status" => $machine_status,
				"machine_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($id !=0){
					$options = array(
						"option" => "update",
						"table"  => "rsm_machine",
						"data"   => $data,
						"where"  => array("machine_id" => $id)
					);
					$this->session->set_flashdata('success_alert','Data Updated Successfully');
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_machine",
						"data"   => $data,
				);
				$this->session->set_flashdata('success_alert','Data Insert Successfully');
			}
			$this->common_model->queries($options);
		}
		redirect('masters/machine');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "rsm_machine",
			"where"  => array("machine_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_machine",
			   "data"   => array("machine_del" => 1),
			   "where"  => array("machine_id" => $id)
		);
		$res = $this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
		echo json_encode($res);
	}
}

