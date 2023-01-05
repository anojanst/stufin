<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Forgot extends BaseController {

	public function index()
	{
    
    $data['pageName']='Forgot Password';
    $this->Common->webTemplate('user/forgot', $data);
  }

  public function email()
	{
    $email =  $_POST['email'];
    
    $result = $this->Common->getByFeildSingle('user', 'email', $email);
    
    if($result){
      $data['pageName']='Forgot Password';
      $data['title']='Check your Email';
      $data['body']='Please check your mail for instructions. (Please check spam folder also)';

      //Load email library
      $this->load->library('email');

      //SMTP & mail configuration
      $config = array(
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'noreply.simplebilling@gmail.com',
          'smtp_pass' => 'uagykywoiqktlpax', //Noreply_simplebilling1
          'mailtype'  => 'html',
          'charset'   => 'utf-8'
      );
      $this->email->initialize($config);
      $this->email->set_mailtype("html");
      $this->email->set_newline("\r\n");

      //Email content
      $htmlContent = '<h1>Reset Password</h1>';
      $htmlContent .= '<p>Click the link below</p>';
      $htmlContent .= '<p><a href="'.base_url().'forgot/validate/'.$result->id.'/'.md5($email).'">Reset</a></p>';
      
      $this->email->from('noreply.simplebilling@gmail.com','Password Reset Email');
      $this->email->subject('Reset Password');
      $this->email->message($htmlContent);

      $this->email->to($email);
      $this->email->send();

      $this->Common->webTemplate('user/simpleInstruction', $data);
      // if ($this->email->send()) {
      //   echo "sent";
      // } else {
      //   show_error($this->email->print_debugger());
      // }
    }
    else{
      $data['message']='Email not exist in our database';
      $data['pageName']='Forgot Password';

      $this->Common->webTemplate('user/forgot', $data);
    }
    //   $sessionArray = array('userId'=>$result->id,
    //                         'name'=>$result->businessName,
    //                         'userLoggedIn' => TRUE );

    //   $this->session->set_userdata($sessionArray);

    //   $data['pageName']='User Home';

    //   redirect('userhome');
    // }else{
    //   $data['message']='Incorrect email or password!';
    //   $data['pageName']='Login';

    //   $this->Common->webTemplate('user/login', $data);

    // }

  }

  public function validate($userId, $emailHash) {
		$result = $this->Common->getByFeildSingle('user', 'id',  $userId);

    if($emailHash==md5($result->email)){
      $sessionArray = array('forgotUserId'=>$result->id);

      $this->session->set_userdata($sessionArray);
      
      $data['pageName']='Forgot Password';
      $this->Common->webTemplate('user/reset', $data);
    }
    else{      
      $data['pageName']='Forgot Password';
      $data['title']='OOPS..!';
      $data['body']='Something went wrong, Please Try again later.';
      $this->Common->webTemplate('user/simpleInstruction', $data);
    }
	}

  public function reset() {
		$userId = $this->session->userdata ( 'forgotUserId' );
    $hashPassword = password_hash($this->input->post('password'), PASSWORD_BCRYPT );
  
    $data = array(
      'password' => $hashPassword
    );

    $this->Common->update('user', $userId, $data);

    echo json_encode ("done");
	}

}
?>