<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Appointment extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('AppointmentModel');
    }
       public function index_get(){

         header("Access-Control-Allow-Origin:*");
         $appointment=$this->AppointmentModel->getAppointment();
         // $output='';
         // if(count($appointment)>0)
         //        {
         //         $output = '<p>You have successfully booked an appointment with Dr. John Doe <br>Here are your details<br>Date:'.$appointment->appointment_date.'</p>
         //                        <p>Eagerly awaiting your contact
         //                        </p>';
         //                   }
         //            else{
         //                 '<p>You have no Appointment</p>'
         //            } 

         //            echo $output;           



           if($appointment>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'Appointment Found',
           'data'=>$appointment  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No Appointment Found',
           'data'=>$appointment  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
        
           
} 

        public function index_post()
           {
            header("Access-Control-Allow-Origin:*");

       
             $appointment         = $this->AppointmentModel->saveAppointment();
             if($appointment){
              $new=array('valid'=>'yes','datas'=>$appointment);
              echo json_encode($new);
             }else{
              echo "nothing found";
             }
             
           }  

           public function allAppointment_get(){
           header("Access-Control-Allow-Origin:*");

            $appointments=$this->AppointmentModel->getAllAppointment();

             if(!empty($appointments))
              {
          
               echo json_encode($appointments); 
                }
        
         
          
           } 

}
