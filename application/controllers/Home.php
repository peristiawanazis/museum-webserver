<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Add_marker.php");

 //we need to call PHP's session object to access it through CI
class Home extends CI_controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->helper('form');
 }
 
 function index()
 {
   	if($this->session->userdata('logged_in'))
   {
 $this->load->library('googlemaps');
 // Load our model
 $this->load->model('Map_model', '', TRUE);
 // Initialize the map, passing through any parameters
 
 $config['zoom'] = "auto";
 $this->googlemaps->initialize($config);
 // Get the co-ordinates from the database using our model
 $coords = $this->Map_model->get_coordinates();
 // Loop through the coordinates we obtained above and add them to the map
 foreach ($coords as $coordinate) {
 $marker = array();
 $marker['infowindow_content'] = '<b>Nama : </b>'.''.$coordinate->museum_name."<br>".
 								 '<b>Price : </b>'.''.$coordinate->museum_price."<br>".
 								 '<b>Regional : </b>'.''.$coordinate->regional_name."<br>".
 								 '<b>Deskripsi : </b>'.''.$coordinate->museum_desc."<br>".
 								 '<b>Jam Buka : </b>'.''.date('h:ia ', strtotime($coordinate->museum_open))."<br>".
 								 '<b>Tutup : </b>'.''.date('h:ia ', strtotime($coordinate->museum_close))."<br>";

 $marker['position'] = $coordinate->museum_lat.','.$coordinate->museum_long;
 $this->googlemaps->add_marker($marker);
 }
 // Create the map
 $data = array();
 $data['map'] = $this->googlemaps->create_map();
 $session_data = $this->session->userdata('logged_in');
 $data['username'] = $session_data['user_name'];
 $data['password'] = $session_data['user_password'];
 $data['regional'] = $this->Map_model->get_regional();
 $data['aa'] = $this->Map_model->getrowid();

 $this->load->view('main', $data);
}


else{
			redirect('login');}
	}		

public function insert(){      
    $this->load->database();
    $this->load->model('Map_model');

    $data_map = array(
      'museum_lat' => $this->input->post('latitude'),
      'museum_long'        => $this->input->post('longitude')
    );

    $data_address = array(
      'address'    => $this->input->post('address'),
      'city'       => $this->input->post('city'),
      'zipcode'    => $this->input->post('zipcode')
    );    

    $this->my_model->insert_entry($data_map, $data_address);

   
}



	
public function do_logout(){
		$this->session->sess_destroy();
		redirect('login');
	}



}
 ?>