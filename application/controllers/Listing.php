<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Listing extends BaseController {

  public function index()
  {
    
  }

  public function allService()
  {
    $data['pageName'] = "All Services";
    $data['services'] = $this->Common->getAllData('service');

    echo '<pre>' . var_export($data['services'], true) . '</pre>';
    // $this->Common->webTemplate('list/service', $data);
  }

  public function serviceByType($type)
  {
    $data['pageName'] = "All Services";
    $data['services'] = $this->Common->getByFeild('service', 'type', $type);

    echo '<pre>' . var_export($data['services'], true) . '</pre>';
    
    
  }

  public function allOffer()
  {
    $data['pageName'] = "Offers";
    $data['offers'] = $this->Common->getAllData('offer');

    echo '<pre>' . var_export($data['offers'], true) . '</pre>';
    // $this->Common->webTemplate('list/service', $data);
  }

}