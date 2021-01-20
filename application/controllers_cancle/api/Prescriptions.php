<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Prescriptions extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('PrescriptionsModel');
    }
       public function index_get(){

         header("Access-Control-Allow-Origin:*");
         $prescription=$this->PrescriptionsModel->getPrescription();
        
           if($prescription>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'prescription Found',
           'data'=>$prescription  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No prescription Found',
           'data'=>$prescription  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
        
           
} 
      public function prescription_post()
           {
            header("Access-Control-Allow-Origin:*");

            $medicine_name=$this->input->post('medicine_name');
            $timez=$this->input->post('timez');
            $quantity=$this->input->post('quantity');
            //$doc_id = $this->input->post('doc_id');

            
           for ($i = 0; $i < count($this->input->post('medicine_name')); $i++)
        {
           $data[$i] = array(
               'medicine_name' => $medicine_name[$i],
               'timez' => $timez[$i],
               'quantity' => $quantity[$i],
               'doc_id'=>$this->input->post('doc_id'),
               'user_id' => $this->input->post('user_id'),
               'appointment_id' => $this->input->post('appointment_id')
            );
          //   $data=array(
          //   'doc_id'=> $this->input->post('doc_id'),
          // );
        
       }  


         
        $this->PrescriptionsModel->create($data);

       }

       public function allpres_get(){
           header("Access-Control-Allow-Origin:*");

          $allprescription=$this->PrescriptionsModel->getAllPrescription();

           if(!empty($allprescription))
         {
         
          echo json_encode($allprescription); 
         }


       }
}