<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Dashboard extends BaseController {

  public function __construct()
  {
      parent::__construct();
      $this->isLoggedIn();   
  }

  public function index()
  {
    $data['pageName'] ='Dashboard';

    $this->Common->adminTemplate('dashboard/dashboard', $data);
  }

} 

?>