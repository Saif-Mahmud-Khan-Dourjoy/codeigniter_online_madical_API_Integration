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
 
     public function user($phone,$password){         
        $this->db->where('phone',$phone);
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
                'gender'            => $this->input->post('gender'), 
                'marital_status'            => $this->input->post('marital_status'), 
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
        'district'=>$this->input->post('district'),
        'age'=>$this->input->post('age'),
        'height'=>$this->input->post('height'),
        'weight'=>$this->input->post('weight'),
        'education'=>$this->input->post('education'),
        'marital_status'=>$this->input->post('marital_status'),
        'blood_group'=>$this->input->post('blood_group'),
        'phone'=>$this->input->post('phone'),
        'gender'=>$this->input->post('gender'),
        // 'description' => $this->input->post('description')
        );
        
        $this->db->SET($userupdate);
        $this->db->WHERE('id',$user_id);
        $this->db->update('user');
        return true;
     }

     public function recharge_request($id){
      $data=array(
           'amount'            => $this->input->post('amount'), 
               'details'            => $this->input->post('details'), 
               'user_id'            => $id, 
               
        );
     $this->db->insert('recharge_request',$data);
       $result=$this->db->insert_id();
         return $result;
   }

   public function get_balance($user_id){
     $this->db->where('user_id',$user_id); 
     $qu=$this->db->get('wallet');
     return $qu->result();
}





 }