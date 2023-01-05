<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Ajax extends BaseController {

	public function index(){ 
    }
    
    public function email(){
		$output=[];
		if($this->Common->getCount('user', 'email', $_POST['email'])>0){
			$output['cls']="error";
			$output['msg']="E-mail Already Exist!";
		}
		else{
			$output['cls']="success";
			$output['msg']="E-mail Available!";
		}
		echo json_encode ($output);
  	}

}