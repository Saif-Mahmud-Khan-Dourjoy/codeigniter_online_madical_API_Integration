<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Doctorprofile extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('doctorprofilemodel');
    }

    public function get_doctorprofile($sub_dept_id){
    	header("Access-Control-Allow-Origin:*");

        $doctor_profile= $this->doctorprofilemodel->doctorprofile($sub_dept_id);
     
         echo json_encode($doctor_profile);
       
    }


      public function allPsychiatric($doc){
       header("Access-Control-Allow-Origin:*");
        // $output='';
        $psychiatric= $this->doctorprofilemodel ->getAllpsychiatric($doc);
        if(!empty($psychiatric))
         {
          
          echo json_encode($psychiatric); 
         }
        
      }

          public function allgen_phy($doc){
       header("Access-Control-Allow-Origin:*");
        // $output='';
       $docs = str_replace('_', ' ', $doc);

  
        $gen_phy= $this->doctorprofilemodel ->getAllgen_phy($docs);
        if(!empty($gen_phy))
         {
          
          echo json_encode($gen_phy); 
         }
        
      }

       public function allClinicalPsycologist($doc){
       header("Access-Control-Allow-Origin:*");
        // $output='';
       $docs = str_replace('_', ' ', $doc);

  
        $ClinicalPsycologist= $this->doctorprofilemodel ->getAllClinicalPsycologist($docs);
        if(!empty($ClinicalPsycologist))
         {
          
          echo json_encode($ClinicalPsycologist); 
         }
        
      }

      public function allAltMed($doc){
       header("Access-Control-Allow-Origin:*");
        // $output='';
       // $docs = str_replace('_', ' ', $doc);

  
        $AltMed= $this->doctorprofilemodel ->getAllAltMed($doc);
        if(!empty($AltMed))
         {
          
          echo json_encode($AltMed); 
         }
        
      }

      //  public function allVetDoc($doc){
      //  header("Access-Control-Allow-Origin:*");
      //   // $output='';
      //  $docs = str_replace('_', ' ', $doc);

  
      //   $VetDoc= $this->doctorprofilemodel ->getAllVetDoc($docs);
      //   if(!empty($VetDoc))
      //    {
          
      //     echo json_encode($VetDoc); 
      //    }
        
      // }



         public function allMedicineDoc($doc){
       header("Access-Control-Allow-Origin:*");
        // $output='';
        $meddoc= $this->doctorprofilemodel ->getAllMedDoc($doc);
        if(!empty($meddoc))
         {
          
          echo json_encode($meddoc); 
         }
        
      }

       public function specialist(){
       	 header("Access-Control-Allow-Origin:*");

       	 $spe= $this->doctorprofilemodel ->getAllspe();

       	 if(!empty($spe)){
       	 	echo json_encode($spe);
       	 }

       }

          public function alt_med_doc(){
         header("Access-Control-Allow-Origin:*");

         $alt_med_doc= $this->doctorprofilemodel ->getAllalt_med_doc();

         if(!empty($alt_med_doc)){
          echo json_encode($alt_med_doc);
         }

       }

        public function all_veterinary($doc){
         header("Access-Control-Allow-Origin:*");

         $veterinary= $this->doctorprofilemodel ->get_all_veterinary($doc);

         if(!empty($veterinary)){
          echo json_encode($veterinary);
         }

       }




		public function doc_own_profile($doc_id){
		       header("Access-Control-Allow-Origin:*");
		        // $output='';
		        $doc = $this->doctorprofilemodel ->getdoc($doc_id);
		        if(!empty($doc))
		         {
		          
		          echo json_encode($doc); 
		         }
		        
		      }



		public function statuschk2($doc_id){
		  header("Access-Control-Allow-Origin:*");
          $status=$this->input->post('status');
          $em_end_time=$this->input->post('em_end_time');

          // echo json_encode($doc_id);
          $chk=$this->doctorprofilemodel->stschk2($doc_id,$status,$em_end_time);

          if($chk>0){
          	echo json_encode("Status Successfully Changed") ;
          }
}  

   

    public function statuschk($doc_id){
      header("Access-Control-Allow-Origin:*");
          $status=$this->input->post('status');
         

          // echo json_encode($doc_id);
          $chk=$this->doctorprofilemodel->stschk($doc_id,$status);

          if($chk>0){
            echo json_encode("Status Successfully Changed") ;
          }
}   
    
      public function statusup($doc_id){
      header("Access-Control-Allow-Origin:*");
          $status=$this->input->post('status');
         

          // echo json_encode($doc_id);
          $up=$this->doctorprofilemodel->stsup($doc_id,$status);

          if($up>0){
            echo json_encode("Status Successfully Changed") ;
          }
   } 

       public function emergency_consultant(){
       	header("Access-Control-Allow-Origin:*");
        $emg_cons=$this->doctorprofilemodel->emergency_consultant();
        if(!empty($emg_cons)){
        	echo json_encode($emg_cons);
        }

       }

        public function doc_pro($doc_id){
            header("Access-Control-Allow-Origin:*");
        $doc_pro=$this->doctorprofilemodel->doc_pro($doc_id);
        if(!empty($doc_pro)){
          echo json_encode($doc_pro);
        }
        }


}