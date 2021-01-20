 <?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ModelDoctor extends CI_Model {

	// public function __construct() {
 //             parent::__construct();
             
 //             // $this->load->database();
 //    }

     public function saveDoctor($registration){

        $this->db->insert('doctor',$registration);
        $result=$this->db->insert_id();
		    return $result;

   } 

    public function doctor($phone,$pass){         
        $this->db->where('phone',$phone);
        $this->db->where('password',$pass);
        $qu=$this->db->get('doctor');
        if($qu->num_rows()>0){   
        return $qu->result();
        }
     }

      public function getDoctor($query){

           $this->db->select("*");
           $this->db->from("doctor"); 
		   $this->db->like('name', $query);
		   $this->db->or_like('degree', $query);
		   $this->db->or_like('specialized', $query);
		  $qu=$this->db->get();
		  return $qu->result();
}
}