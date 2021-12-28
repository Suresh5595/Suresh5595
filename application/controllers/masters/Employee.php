<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{	$data['page_title'] ='Employee';
		$data['content'] = 'masters/employee/add_employee';
		$this->load->view('layout/temp',$data);
	}
	/*public function employee()
	{
		$type=$this->uri->segment(3);
		if($this->input->post('add')!=NULL || !empty($this->input->post('add')))
		{
			$this->form_validation->set_rules('code', 'Employee Code', 'required|trim|is_unique[employee.eid]',array('is_unique' => 'This Employee Code <strong>'.$this->input->post('code').'</strong> is already exist.'));
			if($this->form_validation->run()==TRUE)
			{
				$tbl_value=array('name'=>$this->input->post('frm_name'),
					'eid'=>$this->input->post('code'),
					'company'=>$this->input->post('company'),
					'branch'=>$this->input->post('branch'),
					'designation'=>$this->input->post('designation'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'),
					'address'=>$this->input->post('address'),
					'status'=>$this->input->post('active')=="1"?$this->input->post('active'):"0",
					'created'=>time());
				$insId=$this->UDM->insert('employee',$tbl_value);
				$this->session->set_userdata('delete_message','Employee Added');
				$tbl_value=array('fld_uid'=>$this->session->userdata('nexs_zgaccounts_admin'),'table_name'=>'employee','rowId'=>$insId,'message'=>'Employee Added','fld_time'=>time());
				$this->UDM->insert('tbl_log',$tbl_value);
				redirect('admin/employee');
			}
			else
			{
				$data['form_error']='Form Error';
			}
		}
		else if($this->input->post('update')!=NULL || !empty($this->input->post('update')))
		{	
			$tbl_value=array('name'=>$this->input->post('frm_name'),
				'eid'=>$this->input->post('code'),
				'company'=>$this->input->post('company'),
				'branch'=>$this->input->post('branch'),
				'designation'=>$this->input->post('designation'),
				'phone'=>$this->input->post('phone'),
				'email'=>$this->input->post('email'),
				'address'=>$this->input->post('address'),
				'status'=>$this->input->post('active')=="1"?$this->input->post('active'):"0");
			$this->UDM->update(array('id'=>$this->input->post('frm_id')),'employee',$tbl_value);
			$this->session->set_userdata('delete_message','Employee Updated');
			$tbl_value=array('fld_uid'=>$this->session->userdata('nexs_zgaccounts_admin'),'table_name'=>'employee','rowId'=>$this->input->post('frm_id'),'message'=>'Employee Updated','fld_time'=>time());
			$this->UDM->insert('tbl_log',$tbl_value);
			//update users table designation
			$this->UDM->update(array('fld_ecode'=>$this->input->post('frm_id')),'tbl_users',array('fld_type'=>$this->input->post('designation')));
			redirect('admin/employee');
		}
		if($type=='delete')
		{
			$id=$this->uri->segment(4);
			if($id!=NULL || !empty($id))
			{
				$this->UDM->delete(array('id'=>$id),'employee');
				$this->session->set_userdata('delete_message','Employee Deleted');
				$tbl_value=array('fld_uid'=>$this->session->userdata('nexs_zgaccounts_admin'),'table_name'=>'employee','rowId'=>$id,'message'=>'Employee Deleted','fld_time'=>time());
				$this->UDM->insert('tbl_log',$tbl_value);
			}
			redirect('admin/employee');
		}
		$data['company']=$this->UDM->select_where_multi('*','tbl_company',array('status'=>1),'fld_name','asc');
		$data['branch']=$this->UDM->select_where_multi('*','tbl_branch',array('status'=>1),'fld_name','asc');
		$data['designation']=$this->UDM->select_where_multi('*','tbl_designation',array('fld_id!='=>0,'status'=>1),'fld_name','asc');
		$data['result']=$this->UDM->select('*','employee','name','asc');
		$data['title']='Employee';
		$this->load->view('header',$data);
		$this->load->view('employee');
		$this->load->view('footer');
	}*/
}
