<?php 
 
class Apoteker extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
	}
 
	function index(){
		$this->load->view('dashboard_apoteker');
	}
}