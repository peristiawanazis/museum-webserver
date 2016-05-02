<?php
class Map_model extends CI_Model {
 function __construct()
 {
 parent::__construct();
 }
 function get_coordinates()
 {
 $return = array();
 $this->db->select("museum_lat,museum_long,museum_name,museum_price,regional_name,museum_desc,museum_open,museum_close");
 $this->db->from("museum_loc");
 $this->db->join('museum', 'museum.museum_id = museum_loc.museum_id');
 $this->db->join('regional', 'regional.regional_id = museum.regional_id');
  $query = $this->db->get();
 if ($query->num_rows()>0) {
 foreach ($query->result() as $row) {
 array_push($return, $row);
 }
 }
 return $return;
 }
}
