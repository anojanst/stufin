<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    
    $data['pageName']='Login';
    $this->Common->webTemplate('user/login', $data);
  }

  public function checkUserLogin()
	{
    $email =  $_POST['email'];
    $password =  $_POST['password'];
   
    $result = $this->User->userLogin($email,$password);

    if($result==TRUE){
      $result = $this->Common->getByFeildSingle('user', 'email', $email);
      $sessionArray = array('userId'=>$result->id,
                            'name'=>$result->businessName,
                            'userLoggedIn' => TRUE );

      $this->session->set_userdata($sessionArray);

      $data['pageName']='User Home';

      redirect('userhome');
    }else{
      $data['message']='Incorrect email or password!';
      $data['pageName']='Login';

      $this->Common->webTemplate('user/login', $data);

    }

  }

  public function logoutUser() {
		$this->session->sess_destroy ();	
		redirect ( 'login' );
	}

}
?>