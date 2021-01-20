<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Doctor extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('DoctorModel');
    }
       public function index_get(){

         header("Access-Control-Allow-Origin:*");
    
         $doctor= $this->DoctorModel->doctor();

           
           if($doctor>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'User Found',
           'data'=>$doctor  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No User Found',
           'data'=>$doctor  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
            
} 

    public function search_get(){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $query = '';
          if($this->input->get('search_text'))
            {
             $query = $this->input->get('search_text');
            }
        $doctor= $this->DoctorModel ->getDoctor($query);

         if(!empty($doctor))
         {
          
          echo json_encode($doctor); 
         }
        

       

        
          


    }

         public function login_post(){
         header("Access-Control-Allow-Origin:*");
         $email=$this->input->post('email'); 
         $password=$this->input->post('password');        
         $doctorinfo=$this->DoctorModel->doclog($email,$password);
         
         if(!empty($doctorinfo))
         {
          $new=array('valid' => "yes", 'dataes' => $doctorinfo);
          echo json_encode($new); 
         }
         else{
          $new=array('valid' => "no");
          echo json_encode($new); 
         }
              
          
      }

      public function alldoctor_get(){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $doctors= $this->DoctorModel ->getAllDoctor();
        if(!empty($doctors))
         {
          
          echo json_encode($doctors); 
         }
        

       


       
      }


}