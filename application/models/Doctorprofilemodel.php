<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Doctorprofilemodel extends CI_Model {

		public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }
      public function doctorprofile($sub_dept_id){
      	$this->db->where('sub_dept_id',$sub_dept_id);
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }

       public function getAllpsychiatric($doc){
      	$this->db->where('specialized',$doc);
      	$this->db->order_by('name');
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }
      public function getAllgen_phy($docs){
      	$this->db->where('specialized',$docs);
      	$this->db->order_by('name');
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }

       public function getAllClinicalPsycologist($docs){
      	$this->db->where('specialized',$docs);
      	$this->db->order_by('name');
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }

       public function getAllAltMed($doc){
      	$this->db->where('specialized',$doc);
      	$this->db->order_by('name');
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }
		 public function getAllMedDoc($doc){
		      	$this->db->where('specialized',$doc);
		      	$this->db->order_by('name');
				  $qu=$this->db->get('doctor');
				  return $qu->result();
		      }

		public function getdoc($doc_id){
		      	$this->db->where('id',$doc_id);
				  $qu=$this->db->get('doctor');
				  return $qu->result();
		      }
		 public function getAllalt_med_doc(){
      	
		  $qu=$this->db->get('alternative_dep');
		  return $qu->result();
      }      

       public function getAllspe(){
      	
		  $qu=$this->db->get('specialist_dep');
		  return $qu->result();
      }    

         public function get_all_veterinary($doc){
      	
		 $this->db->where('specialized',$doc);
      	$this->db->order_by('name');
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }    

    //   public function getAllVetDoc($docs){
    //   	$this->db->where('specialized',$docs);
    //   	$this->db->order_by('name');
		  // $qu=$this->db->get('doctor');
		  // return $qu->result();
    //   }


		public function stschk2($doc_id,$status,$em_end_time){
			if($status==1){
				$status=0;
			}else{
				$status=1;
			}

			$data=array(
				'active'=>$status,
				'emergency_time_end'=>$em_end_time,
			);
			   $this->db->where('id',$doc_id);
		return $this->db->update('doctor',$data);
		}     

			public function stschk($doc_id,$status){
			if($status==1){
				$status=0;
			}else{
				$status=1;
			}

			$data=array(
				'active'=>$status,
			
			);
			   $this->db->where('id',$doc_id);
		return $this->db->update('doctor',$data);
		}  


			public function stsup($doc_id,$status){

			if($status==1){
				$status=0;
			}
			// else{
			// 	$status=1;
			// }

			$data=array(
				'active'=>$status,
			
			);
			   $this->db->where('id',$doc_id);
		return $this->db->update('doctor',$data);
		}  

		public function emergency_consultant(){
		 $this->db->where('active',1);
		  $qu=$this->db->get('doctor');
		  return $qu->result();
		} 

		public function doc_pro($doc_id){
		$this->db->where('id',$doc_id);
   
          $qu=$this->db->get('doctor');
		  return $qu->result();
		}
}
