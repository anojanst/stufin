<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class User extends BaseController {


public function __construct()
{
    parent::__construct();
    $this->isLoggedIn();   
}

public function index()
{

  $users = $this->Common->getAllData('admin_users');
  
  $tableData=['pageName'=>"Users",
          'users' => $users, 
          'action'  => 'adduser'
          ];

  $this->load->view('dashboard/user', $tableData);
}

public function addUser()
{
  $hashPassword = password_hash($_POST['password'], PASSWORD_BCRYPT );

  $data = array(
      'fullName' => $_POST['name'],
      'password' => $hashPassword,
      'email' =>$_POST['email'],
      'phone' => $_POST['phone']
  );  

    $this->db->insert('admin_users', $data);

    $users = $this->Common->getAllData('admin_users');

    $tableData=['pageName'=>"Users",
    'users' => $users ,
    'check' => 'success',
    'action'  => 'adduser'
    ];

    $this->load->view('dashboard/user', $tableData);

}

public function delete($id){

  $this->Common->delete('admin_users', $id);
  $users = $this->Common->getAllData('admin_users');
  $data=['pageName'=>"Users",
          'users' => $users,
          'action'  => 'adduser'
      ];
  $this->load->view('dashboard/user', $data); 

}

public function loadUpdate($id){

  $updateUser = $this->Common->getById('admin_users',$id);

  $users = $this->Common->getAllData('admin_users');

  $tableData=['pageName'=>"Users",
              'users' => $users ,
              'data'  => $updateUser,
              'action'  => 'update'
            ];

  $this->load->view('dashboard/user', $tableData);

}

public function update($id){

  if(!$_POST['password']):
  $data = array(
    'fullName' => $_POST['name'],
    'email' =>$_POST['email'],
    'phone' => $_POST['phone']
  ); 
  else:
  $hashPassword = password_hash($_POST['password'], PASSWORD_BCRYPT );
  $data = array(
    'fullName' => $_POST['name'],
    'password' => $hashPassword,
    'email' =>$_POST['email'],
    'phone' => $_POST['phone']
  ); 

  endif;

  $this->Common->update('admin_users', $id, $data);
  $users = $this->Common->getAllData('admin_users');

  $tableData=['pageName'=>"Users",
              'users' => $users ,
              'action'  => 'addUser'
            ];

  $this->load->view('dashboard/user', $tableData);
  
}

public function logout()
  {  
    $this->session->sess_destroy ();	
		redirect ( 'login' );
  }

} 

?>