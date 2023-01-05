<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Register extends BaseController {

  public function index()
  {
    $data['pageName'] = "Home";
    $this->Common->webTemplate('home', $data);
  }

  public function save(){
    $hashPassword = password_hash($this->input->post('password'), PASSWORD_BCRYPT );
  
    $studioData = array(
      'name' => $this->input->post('businessName'),
      'status' => 0
    );

    $this->db->insert('studio', $studioData);

    $data = array(
      'studioId' => $this->db->insert_id(),
      'email' => $this->input->post('email'),
      'password' => $hashPassword,
      'cancelStatus' => 0
    );

    $this->db->insert('user', $data);

    echo json_encode ("done");
  }


}