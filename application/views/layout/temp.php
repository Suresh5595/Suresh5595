<?php 
	 $this->load->view('layout/header');
	 $this->load->view('layout/left_sidebar');
	 $this->load->view('layout/right_sidebar');
	 $this->load->view($content);
	 $this->load->view('layout/footer');
?>
