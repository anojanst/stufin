<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $this->load->view('dashboard/login');
  }

  public function checkLogin()
	{
    $email =  $_POST['email'];
    $password =  $_POST['password'];
   
    $result = $this->AdminUsers->userLogin($email,$password);

    if($result!=FALSE){
      $result = $this->Common->getByFeildSingle('admin_users', 'email', $email);
      $sessionArray = array('userId'=>$result->id,
                            'name'=>$result->name,
                            'loggedIn' => TRUE );

      $this->session->set_userdata($sessionArray);

      $data=['pageName'=>'Dashboard'];

      $this->load->view('dashboard/dashboard', $data);
    }else{
      $data=['message'=>'Incorrect email or password!' ];
      
      $this->load->view('dashboard/login',$data);

    }

  }

}
?>