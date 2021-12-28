<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()  {
        parent:: __construct();
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function validation(){ 
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($username && $password){
				 $check = $this->common_model->check_user($username,$password);
				 if($check){
					 $data = array(
						 'role_id'=> $check->role_id,
						 'user_id'=> $check->user_id,
						 'name'=>$check->name,
						 'email'=>$check->email
					 );
                     $this->session->set_userdata($data);
					 redirect('dashboard');
				 }else{
					$this->session->set_flashdata('alert', 'Invalid Username & Password');
			        redirect('login');
				 }
	        }else{
				$this->session->set_flashdata('alert', 'Insert required fileds');
      	        redirect('login');
			}
		}
	}

	public function logout(){
		  $data = array('name','user_id','role_id','email');
		  $this->session->unset_userdata($data);
		  $this->session->set_flashdata('success', 'Logout Successfully');
		  redirect("login");
	}
}
