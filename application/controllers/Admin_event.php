<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_event extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        $this->load->model('DataModel');
    }
    
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->DataModel->getWhere('username',$username);
        $cek = $this->DataModel->getData('admin')->row();

        if ($cek != null) {
            if($password == $cek->password){
                redirect('index.php/Admin_view/index');
            } else {
                redirect("index.php/Admin_view/login");
            }
        }else{
            redirect('index.php/Admin_view/index');
        }
    }
    
    public function register(){
        
    }
}