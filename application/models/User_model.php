<?php
Class User_model extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('user_id, user_password, user_name');
   $this -> db -> from('user');
   $this -> db -> where('user_name', $usern_ame);
   $this -> db -> where('user_password', MD5($user_password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>