<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Home extends BaseController {

  public function index()
  {
    $data['pageName'] = "Home";
    $this->Common->webTemplate('home', $data);
  }

}