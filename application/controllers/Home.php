<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
 }
 
 function index()
 {
   $this->load->library('googlemaps');

$config['center'] = '-6.227934, 106.787109';
$config['zoom'] = 'auto';
$this->googlemaps->initialize($config);

$marker = array();
//$marker['position'] = '37.429, -122.1419';
$this->googlemaps->add_marker($marker);
$data['map'] = $this->googlemaps->create_map();

     $this->load->view('main', $data);
   
   
 }
 
 
 
}
 
?>