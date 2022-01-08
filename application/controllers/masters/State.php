<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='State';
		$data['content'] = 'masters/state';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_state",
			"where"  => array("state_del" => 0)
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$state_name= $this->input->post('state_name');
			$state_status = $this->input->post('state_status');
			$data = array(
				"state_name" => $state_name,
				"state_status" => $state_status,
				"state_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($id !=0){
				$options = array(
					"option" => "update",
					"table"  => "rsm_state",
					"data"   => $data,
					"where"  => array("state_id" => $id)
				);
				$this->session->set_flashdata('success_alert','Data Updated Successfully');
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_state",
						"data"   => $data,
				);
				$this->session->set_flashdata('success_alert','Data Insert Successfully');
			}
			$this->common_model->queries($options);
		}
		redirect('masters/state');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "rsm_state",
			"where"  => array("state_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_state",
			   "data"   => array("state_del" => 1),
			   "where"  => array("state_id" => $id)
		);
		$res = $this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
		echo json_encode($res);
	}
}

