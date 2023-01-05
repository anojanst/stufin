<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Service extends BaseController {

  public function __construct()
  {
      parent::__construct();
      $this->isUserloggedIn();   
  }

  public function index()
  {
    $data['pageName'] ='Service';

    $this->Common->webTemplate('user/service', $data);
  }

  public function addService()
  {
    $data['pageName'] ='Service';
    
		$image = $this->Common->upload('image');

    $newService=array(
      'title' => $this->input->post('title'),
      'type' => $this->input->post('type'),
      'description' => $this->input->post('description'),
      'businessId' => $this->session->userdata ( 'userId' ),
      'image' => $image
    );

    $this->db->insert('service', $newService);

    redirect('userhome');

  }

  public function editService($id)
  {
    $data['pageName'] ='User Home';

    $service=$this->Common->getById('service', $id);
    $service->aft=explode(", ", $service->additionalServiceType);

    $data['service']=$service;

    $this->Common->webTemplate('user/service', $data);

  }

  public function updateService($id)
  {
    $data['pageName'] ='Service';

    $service=array(
      'title' => $this->input->post('title'),
      'type' => $this->input->post('type'),
      'description' => $this->input->post('description')
    );

    if(!empty($_FILES['image']['name'])){
			$cover = $this->Common->upload('image');
			$service['image']=$cover;
		}

    $this->Common->update('service', $id, $service);

    redirect('userhome');

  }

  public function deleteService($serviceId)
  {
    $this->Common->delete('service', $serviceId);

    redirect('userhome');
  }
} 

?>