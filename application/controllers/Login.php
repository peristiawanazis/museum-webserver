<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
 }
 
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$data['msg'] = $msg;
		$this->load->view('login', $data);
	}

	public function process(){
		// Load the model
		$this->load->model('User_model');
		// Validate the user can login
		$result = $this->User_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('home');
		}		
	}
}
