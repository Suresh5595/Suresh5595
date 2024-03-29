<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Item';
		$data['content'] = 'masters/item';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_item",
			"where"  => array("item_del" => 0)
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$item_code = $this->input->post('item_code');
			$item_name = $this->input->post('item_name');
			$item_type = $this->input->post('item_type'); 
			$item_status = $this->input->post('item_status');
			$data = array(
				"item_code" => $item_code,
				"item_name" => $item_name,
				"item_type" => $item_type,
				"item_status" => $item_status,
				"item_del" => 0,
				"user_id_fk" => $this->session->userdata('user_id'),
				"date_added" => date('Y-m-d h:i:s')
			);
			if($id !=0){
					$options = array(
						"option" => "update",
						"table"  => "rsm_item",
						"data"   => $data,
						"where"  => array("item_id" => $id)
					);
					$this->session->set_flashdata('success_alert','Data Updated Successfully');
		    }else{
				$options = array(
						"option" => "insert",
						"table"  => "rsm_item",
						"data"   => $data,
				);
				$this->session->set_flashdata('success_alert','Data Insert Successfully');
			}
			$this->common_model->queries($options);
		}
		redirect('masters/item');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "rsm_item",
			"where"  => array("item_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

	public function daleteRecord(){
		$id = $this->input->post('id');
		$options = array(
			   "option" => "update",
			   "table"  => "rsm_item",
			   "data"   => array("item_del" => 1),
			   "where"  => array("item_id" => $id)
		);
		$res = $this->common_model->queries($options);
		$this->session->set_flashdata('success_alert','Data Deleted Successfully');
		echo json_encode($res);
	}
}

