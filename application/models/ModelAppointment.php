 <?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ModelAppointment extends CI_Model {

     
   public function saveAppointment($appointments){

        $this->db->insert('appointment',$appointments);
        $result=$this->db->insert_id();
		    return $result;

   } 

}