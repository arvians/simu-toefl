<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view extends CI_Controller {

    function __construct()
	{
		parent::__construct();
    }
    
    public function index(){
		$data['judul'] = "Admin || Home";
	
		$this->load->view('admin/master/header_admin',$data);
		$this->load->view('admin/master/navbar_admin',$data);
		$this->load->view('admin/master/sidebar_admin',$data);
		$this->load->view('admin/home_admin',$data);
		$this->load->view('admin/master/footer_admin',$data);
	}

	public function login(){
		$data['judul'] = 'Admin || Login'; 
		$this->load->view('admin/master/header_admin',$data);
		$this->load->view('login');
		$this->load->view('admin/master/footer_admin',$data);
	}
}