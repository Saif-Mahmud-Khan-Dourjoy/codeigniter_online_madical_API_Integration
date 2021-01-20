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

       
             $appointment['appoint'] = $this->AppointmentModel->saveAppointment();

             // echo json_encode($appointment);
           }  

           public function allAppointment_get(){
             $id=$this->uri->segment(4);
           header("Access-Control-Allow-Origin:*");

            $appointments=$this->AppointmentModel->getAllAppointment($id);

            $new='';
            foreach($appointments as $row)
            {

              
            if($row->appointment_date == date('Y-m-d') && $row->status == 1)
            {
            $last_time=date('h:i:s');
            $startTime = strtotime("-15 minutes", strtotime($last_time));
            $time=date('h:i:s', $startTime);
            if($row->time <= $last_time || $row->time >=$time )
            {
            $link='patients_calling.html?id='.$row->id;
            if($row->type=="video"){
               $icon='<i class="material-icons">videocam</i>';
             }else{
                $icon='<i class="material-icons">volume_down</i>';
             }
            }
            else
            {
                $link='#';
                $icon='';
            }
            }
            else
            {
              $link='#';
              $icon='';
            }

            $new.='<ul class="list-group">
            <li class="list-group-item">
            <a href="'.$link.'" id="doc_id" data-id="'.$row->id.'" class="media">
            <div class="media-body">
            <h5>'.$row->doctor_name.'</h5>
            <p>Start Date: '.$row->appointment_date.'</p>
            </div>
            <div class="w-auto call-icon">
            '.$icon.'
            </div>
            </a>
            </li>
            </ul>';



            //  if(!empty($appointments))
            //   {
          
            //    echo json_encode($appointments); 
            //     }

            }
            echo $new;
        
         
          
           } 

}
