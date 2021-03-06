<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class User_model extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  
  public function validate(){
    // grab user input
    $username = $this->security->xss_clean($this->input->post('username'));
    $password = $this->security->xss_clean($this->input->post('password'));
    
    // Prep the query
    $this->db->where('user_name', $username);
    $this->db->where('user_password', $password);
    
    // Run the query
    $query = $this->db->get('user');
    // Let's check if there are any results
    if($query->num_rows() == 1)
    {
      // If there is a user, then create session data
      $row = $query->row();
      $data = array(
          'user_name' => $row->user_name,
          'user_password' => $row->user_password,
          'validated' => true
          );
      $this->session->set_userdata('logged_in', $data);
      return true;
    }
    // If the previous process did not validate
    // then return false.
    return false;
  }
}
?>