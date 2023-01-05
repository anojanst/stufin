<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class UserHome extends BaseController {

  public function __construct()
  {
      parent::__construct();
      $this->isUserloggedIn();   
  }

  public function index()
  {
    $data['pageName'] ='User Home';
    
    $userId = $this->session->userdata ( 'userId' );

    // $data['services'] = $this->Common->getByFeild('service', 'businessId', $businessId);
    // $data['products'] = $this->Common->getByFeild('product', 'businessId', $businessId);

    $this->Common->webTemplate('user/dashboard/home', $data);
  }

  public function updateAddress()
  {
    $data['pageName'] ='User Home';
    $btCommaSeparated = "";
    $i=0;
    foreach($this->input->post('businessType') as $aft){
      if($i!=0){
        $btCommaSeparated = $btCommaSeparated.", ".$aft;
      }
      else{
        $btCommaSeparated = $aft;
      }
      $i++;
    }

    $updateData=array(
      'address' => $this->input->post('address'),
      'area' => $this->input->post('area'),
      'businessType' => $btCommaSeparated
    );

    $businessId = $this->session->userdata ( 'userId' );

    $this->Common->update('business', $businessId, $updateData);

    $this->Common->webTemplate('user/home', $data);
  }

} 

?>