<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('get_val'))
{
	function get_val($get,$wf,$wv,$tbl)
	{
		$CI=get_instance();
		$CI->load->model('common_model');
		$wr=array($wf=>$wv);
		return $CI->common_model->get_val($get,$wr,$tbl);
	}
	
	
	function get_val_multiple($col_get,$where,$tbl)
	{
// 		$CI=get_instance();
// 		$CI->load->model('common_model');
// // 		$wr=array($wf=>$wv);
// 		return $CI->common_model->get_val_multiple($col_get,$where,$tbl);
		
		$CI=get_instance();
		$CI->load->model('common_model');
		return $CI->common_model->get_val_multiple($col_get,$where,$tbl);
	}
}
?>