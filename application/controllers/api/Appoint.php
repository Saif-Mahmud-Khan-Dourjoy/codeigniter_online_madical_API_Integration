<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Appoint extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('appointmodel');
    }

public function get_visit($app_doctor_id){

	 header("Access-Control-Allow-Origin:*");
        
        $visit= $this->appointmodel ->get_visit($app_doctor_id);
        if(!empty($visit))
         {
          
          echo json_encode($visit); 

      }else{
      	echo json_encode("error");
      }

}  

public function chamber_appoint(){
	         header("Access-Control-Allow-Origin:*");

             $appoint = $this->appointmodel->chamber_appoint();

             echo json_encode($appoint);
}  

public function msg_appoint(){
           header("Access-Control-Allow-Origin:*");

             $appoint = $this->appointmodel->msg_appoint();

             echo json_encode($appoint);
}  


  public function get_date($app_doctor_id){

   header("Access-Control-Allow-Origin:*");
        
        $data['date']= $this->appointmodel ->get_date($app_doctor_id);

        $html=$this->load->view('app/get_app',$data,true);

        echo $html;

}  

  // public function check_appoint($app_doctor_id){
  //      header("Access-Control-Allow-Origin:*");
        
  //       $appoint= $this->appointmodel ->check_appoint($app_doctor_id);
  //  }

   public function set_appoint(){
       header("Access-Control-Allow-Origin:*");

            $symptoms = $this->input->post('symptoms');
            $duration = $this->input->post('duration');

          $data=array(
      
            'user_id'         => $this->input->post('user_id'),
            'doctor_id'         => $this->input->post('app_doctor_id'),
            'doctor_name'         => $this->input->post('app_doctor_name'),
            'patient_name'         => $this->input->post('name'),
            'age'         => $this->input->post('age'),
            'appointment_date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'type' => $this->input->post('type'),
            'district' => $this->input->post('district'),
            'gender' => $this->input->post('gender'),
            'symptoms' => json_encode($symptoms),
            'duration' => json_encode($duration) ,
      );


        $appoint= $this->appointmodel ->set_appoint($data);
        if(!empty($appoint)){
          echo json_encode($appoint);
        }
        else{
          echo "someThing Wrong";
        }
   }

   public function appoint($app_doctor_id){
       header("Access-Control-Allow-Origin:*");
        
        $appoint= $this->appointmodel ->appoint($app_doctor_id);
        if(!empty($appoint)){

          $new=array('valid' => "yes", 'dataes' => $appoint);
          echo json_encode($new); 
        }else{
          $new=array('valid' => "no");
          echo json_encode($new); 
         }
        
   }

   public function appoints($app_doctor_id){
       header("Access-Control-Allow-Origin:*");
       $date=$this->input->post('d');
        
        $appoint= $this->appointmodel ->appoints($app_doctor_id,$date);
        if(!empty($appoint)){

        //   $new=array('valid' => "yes", 'dataes' => $appoint);
        //   echo json_encode($new); 
        // }else{
        //   $new=array('valid' => "no");
        //   echo json_encode($new); 
        //  }

          echo json_encode($appoint);
        
   }
 }



   public function emergency_appoint(){
     header("Access-Control-Allow-Origin:*");
        $emergency_appoint= $this->appointmodel->emergency_appoint();
        if(!empty($emergency_appoint)){
         echo json_encode($emergency_appoint);
        }
    
   }

   public function patient_info(){
     header("Access-Control-Allow-Origin:*");
     $user_id=$this->input->post('user_id');
     $date=$this->input->post('date');
     $time=$this->input->post('time');
        $patient_info= $this->appointmodel->patient_info($user_id,$date,$time);
        if(!empty($patient_info)){
         echo json_encode($patient_info);
        }
    
   }





}