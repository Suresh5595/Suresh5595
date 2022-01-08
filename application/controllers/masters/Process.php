<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Process';
		$data['content'] = 'masters/process';
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_machine",
			"where"  => array("machine_del" => 0)
		);
		$data['machines'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_item",
			"where"  => array("item_del" => 0,"item_type" => 'item')
		);
		$data['items'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_item",
			"where"  => array("item_del" => 0,"item_type" => 'raw')
		);
		$data['raw_items'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "rsm_item",
			"where"  => array("item_del" => 0,"item_type" => 'consumables')
		);
		$data['consumables_items'] = $this->common_model->queries($options);
		$this->load->view('layout/temp',$data);
	}
}
