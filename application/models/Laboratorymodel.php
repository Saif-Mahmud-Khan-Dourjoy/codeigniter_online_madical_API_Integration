<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Laboratorymodel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }
   public function user($author_name,$password){         
        $this->db->where('author_name',$author_name);
        $this->db->where('pass',$password);
        $qu=$this->db->get('diagnostic_center');
        if($qu->num_rows()>0){   
        return $qu->result();
        }
     }

      public function saveTest(){
    	$data=array(
				'diagnostic_center_id'  => $this->input->post('diag_id'), 
                'test_name'             => $this->input->post('t_name'), 
                'price'                 => $this->input->post('price'),  
			);
		$this->db->insert('tests_list',$data);
        $result=$this->db->insert_id();
		    return $result;
    }

       public function getTests($diag_id){

           $this->db->select("*");
           $this->db->from("tests");
           $this->db->where('diagnostic_id',$diag_id); 
		  $qu=$this->db->get();
		  return $qu->result();
}
   public function get_individual_result($user_id){
         $this->db->select("*");
           $this->db->from("tests_result");
           $this->db->where('user_id',$user_id); 
      $qu=$this->db->get();
      return $qu->result();

   }

   public function get_appoint_doctor($t_user_id){
           $this->db->select("*");
           $this->db->from("appointment");
           $this->db->where('user_id',$t_user_id); 
      $qu=$this->db->get();
      return $qu->result();

   }


   public function get_result_for_doctor($t_id){
           $this->db->select("*");
           $this->db->from("tests_result");
           $this->db->where('id',$t_id); 
      $qu=$this->db->get();
      return $qu->result();

   }

    
}