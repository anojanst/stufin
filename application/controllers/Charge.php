<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Charge extends BaseController {

  public function __construct()
  {
      parent::__construct();
      $this->isUserloggedIn();   
  }

  public function index()
  {
    $data['pageName'] ='User Home';

    $this->Common->webTemplate('user/home', $data);
  }

  public function charge($id)
  {
    $data['pageName'] ='Charges';
    $data['facilityId'] = $id;
    $charges=$this->Common->getByFeild('charge', 'facilityId', $id);

    $data['charges']=$charges;

    $this->Common->webTemplate('user/charges', $data);

  }

  public function addCharge()
  {
    $charge=array(
      'day' => $this->input->post('day'),
      'start' => $this->input->post('start'),
      'end' => $this->input->post('end'),
      'slotSize' => $this->input->post('slotSize'),
      'charge' => $this->input->post('charge'),
      'discount' => $this->input->post('discount'),
      'facilityId' => $this->input->post('facilityId'),
    );

    $this->db->insert('charge', $charge);

    redirect('facility/charge/'.$this->input->post('facilityId'));

  }

  public function deleteCharge($chargeId, $facilityId)
  {
    $this->Common->delete('charge', $chargeId);

    redirect('facility/charge/'.$facilityId);
  }

  
  
} 

?>