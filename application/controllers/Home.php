<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');

 }
 
 function index()
 {
   // Load the library
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
 $marker['infowindow_content'] = $coordinate->museum_name;
 $marker['position'] = $coordinate->museum_lat.','.$coordinate->museum_long;
 $this->googlemaps->add_marker($marker);
 }
 // Create the map
 $data = array();
 $data['map'] = $this->googlemaps->create_map();
 // Load our view, passing through the map data
 $this->load->view('main', $data);
}


 
 
}
 


?>