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
 function get_regional()     
    { 
        $this->db->select('regional_id');
        $this->db->select('regional_name');
        $this->db->from('regional');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $dept_id = array('-SELECT-');
        $dept_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($dept_id, $result[$i]->regional_id);
            array_push($dept_name, $result[$i]->regional_name);
        }
        return $department_result = array_combine($dept_id, $dept_name);
    }

function insert_entry($data_museum, $data_museumloc) {	

    $this->db->insert('museum', $data_museum);

 	$this->db->insert('museum_loc', $data_museumloc);
}

function getrowid(){
	 $count = $this->db->count_all('museum');
	 return $count+1;
}
}
