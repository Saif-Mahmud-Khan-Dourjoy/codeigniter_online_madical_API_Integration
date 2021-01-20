<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

     public function getUsers(){

           $query=$this->db->get('user');
            return $query->result();
}
 
     public function user($email,$password){         
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $qu=$this->db->get('user');
        if($qu->num_rows()>0){   
        return $qu->result();
        }
     }



    public function saveUser(){
    	$data=array(
				'email'            => $this->input->post('email'), 
                'name'            => $this->input->post('name'), 
                'phone'            => $this->input->post('phone'), 
                'age'            => $this->input->post('age'), 
                'password'         => $this->input->post('password'), 
                'confirm_password' => $this->input->post('confirm_password'), 
			);
		$this->db->insert('user',$data);
        $result=$this->db->insert_id();
		    return $result;
    }

     public function individualUser($user_id){

           $this->db->select("*");
           $this->db->from("user");
           $this->db->where('id',$user_id); 
          $qu=$this->db->get();
          return $qu->result();
}
     public function saveUpdatedUser($user_id){

        $userupdate= array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'address'=>$this->input->post('address'),
        'age'=>$this->input->post('age'),
        );
        
        $this->db->SET($userupdate);
        $this->db->WHERE('id',$user_id);
        $this->db->update('user');

        return true;



     }

 }