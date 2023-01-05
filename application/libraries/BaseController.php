<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 

class BaseController extends CI_Controller {
	
	protected $userId = '';
	protected $name = '';
	protected $global = array ();
		
	function isLoggedIn() {
		$isLoggedIn = $this->session->userdata ( 'loggedIn' );
		
		if (! isset ( $isLoggedIn ) || $isLoggedIn != TRUE) {
			redirect ( 'admin/login' );
		} else {
			$this->userId = $this->session->userdata ( 'userId' );
			$this->name = $this->session->userdata ( 'name' );
			
			$this->global ['name'] = $this->name;
		}
	}
	
	function logout() {
		$this->session->sess_destroy ();	
		redirect ( 'logout' );
	}

	function isUserloggedIn() {
		$isUserLoggedIn = $this->session->userdata ( 'userLoggedIn' );
		
		if (! isset ( $isUserLoggedIn ) || $isUserLoggedIn != TRUE) {
			redirect ( 'login' );
		} else {
			$this->userId = $this->session->userdata ( 'userId' );
			$this->name = $this->session->userdata ( 'ownerName' );
			
			$this->global ['name'] = $this->name;
		}
	}
	
	function logoutUser() {
		$this->session->sess_destroy ();	
		redirect ( 'login' );
	}

	
}