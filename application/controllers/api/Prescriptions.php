<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Prescriptions extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('PrescriptionsModel');
             $this->load->model('common');
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
            $advice=$this->input->post('advice');
            $power=$this->input->post('power');
            $notes=$this->input->post('notes');
            //$doc_id = $this->input->post('doc_id');

            
           for ($i = 0; $i < count($this->input->post('medicine_name')); $i++)
        {
           $data[$i] = array(
               'medicine_name' => $medicine_name[$i],
               'timez' => $timez[$i],
               'quantity' => $quantity[$i],
               'power' => $power[$i],
               'beforeAfter' => $notes[$i],
               'doc_id'=>$this->input->post('doc_id'),
               'user_id' => $this->input->post('user_id'),
               'appointment_id' => $this->input->post('appointment_id')
            );
          //   $data=array(
          //   'doc_id'=> $this->input->post('doc_id'),
          // );
       }
       if(!empty($data))
       {
        $this->PrescriptionsModel->create($data);
       }  
        


        for ($i = 0; $i < count($this->input->post('advice')); $i++)
        {
           $advices[$i] = array(
               'advice' => $advice[$i],
               'doc_id'=>$this->input->post('doc_id'),
               'user_id' => $this->input->post('user_id'),
               'appointment_id' => $this->input->post('appointment_id'),
               'type' => 'treatment'
            );
          //   $data=array(
          //   'doc_id'=> $this->input->post('doc_id'),
          // );
       }
       if(!empty($advices))
       {
        $this->PrescriptionsModel->add_advice($advices);
       }
       
       $advises=$this->input->post('advised');
       for ($i = 0; $i < count($this->input->post('advised')); $i++)
       {
          $advised[$i] = array(
              'advice' => $advises[$i],
              'doc_id'=>$this->input->post('doc_id'),
              'user_id' => $this->input->post('user_id'),
              'appointment_id' => $this->input->post('appointment_id'),
              'type' => 'investigation'
           );
         //   $data=array(
         //   'doc_id'=> $this->input->post('doc_id'),
         // );
      }
      if(!empty($advised))
      {
       $this->PrescriptionsModel->add_advice($advised);
      }
      
      $cc_note=$this->input->post('cc_notes');
      for ($i = 0; $i < count($this->input->post('cc_notes')); $i++)
      {
         $cc_notes[$i] = array(
             'advice' => $cc_note[$i],
             'doc_id'=>$this->input->post('doc_id'),
             'user_id' => $this->input->post('user_id'),
             'appointment_id' => $this->input->post('appointment_id'),
             'type' => 'cc_notes'
          );
        //   $data=array(
        //   'doc_id'=> $this->input->post('doc_id'),
        // );
     }
     if(!empty($cc_notes))
     {
      $this->PrescriptionsModel->add_advice($cc_notes);
     }
     
     $ho_present=$this->input->post('ho_pres');
     for ($i = 0; $i < count($this->input->post('ho_pres')); $i++)
     {
        $ho_pres[$i] = array(
            'advice' => $ho_present[$i],
            'doc_id'=>$this->input->post('doc_id'),
            'user_id' => $this->input->post('user_id'),
            'appointment_id' => $this->input->post('appointment_id'),
            'type' => 'ho_pres'
         );
       //   $data=array(
       //   'doc_id'=> $this->input->post('doc_id'),
       // );
    }
    if(!empty($ho_pres))
    {
     $this->PrescriptionsModel->add_advice($ho_pres);
    }

    $ho_past=$this->input->post('ho_prev');
     for ($i = 0; $i < count($this->input->post('ho_prev')); $i++)
     {
        $ho_prev[$i] = array(
            'advice' => $ho_past[$i],
            'doc_id'=>$this->input->post('doc_id'),
            'user_id' => $this->input->post('user_id'),
            'appointment_id' => $this->input->post('appointment_id'),
            'type' => 'ho_prev'
         );
       //   $data=array(
       //   'doc_id'=> $this->input->post('doc_id'),
       // );
    }
    if(!empty($ho_prev))
    {
     $this->PrescriptionsModel->add_advice($ho_prev);
    }

    $ot_note=$this->input->post('ot_notes');
    for ($i = 0; $i < count($this->input->post('ot_notes')); $i++)
    {
       $ot_notes[$i] = array(
           'advice' => $ot_note[$i],
           'doc_id'=>$this->input->post('doc_id'),
           'user_id' => $this->input->post('user_id'),
           'appointment_id' => $this->input->post('appointment_id'),
           'type' => 'provisional_notes'
        );
      //   $data=array(
      //   'doc_id'=> $this->input->post('doc_id'),
      // );
   }
   if(!empty($ot_notes))
   {
    $this->PrescriptionsModel->add_advice($ot_notes);
   }


   $dd_note=$this->input->post('dd_notes');
   for ($i = 0; $i < count($this->input->post('dd_notes')); $i++)
   {
      $dd_notes[$i] = array(
          'advice' => $dd_note[$i],
          'doc_id'=>$this->input->post('doc_id'),
          'user_id' => $this->input->post('user_id'),
          'appointment_id' => $this->input->post('appointment_id'),
          'type' => 'dd_notes'
       );
     //   $data=array(
     //   'doc_id'=> $this->input->post('doc_id'),
     // );
  }
  if(!empty($dd_notes))
  {
   $this->PrescriptionsModel->add_advice($dd_notes);
  }

  if(!empty($this->input->post('next_appointment')))
  {
    $datas['next_appointment']=$this->input->post('next_appointment');
    $this->db->where('id',$this->input->post('appointment_id'));
    $this->db->update('appointment',$datas);
  }
        

       }

       public function allpres_get(){
           header("Access-Control-Allow-Origin:*");
          $user_id=$this->uri->segment(4);
          $allprescription=$this->PrescriptionsModel->getAllPrescription($user_id);

          if(!empty($allprescription))
         {
         
          echo json_encode($allprescription); 
         }


       }

       public function doctorallpres_get(){
        header("Access-Control-Allow-Origin:*");
       $user_id=$this->uri->segment(4);
       $allprescription=$this->PrescriptionsModel->doctor_prescription($user_id);

       if(!empty($allprescription))
      {
      
       echo json_encode($allprescription); 
      }


    } 

      public function doctorallpres_ind_post(){
        header("Access-Control-Allow-Origin:*");
       $user_id=$this->input->post('user_id');
       $doc_id=$this->input->post('doc_id');

       // echo ($user_id);
       // echo ($doc_id);

       // exit();

       $allprescription=$this->PrescriptionsModel->doctor_prescription_ind($user_id,$doc_id);

       if(!empty($allprescription))
      {
      
       echo json_encode($allprescription); 
      }


    }



       public function get_prescription_get(){
        header("Access-Control-Allow-Origin:*");
       $appointment_id=$this->uri->segment(4);
       $allprescription=$this->PrescriptionsModel->prescriptions($appointment_id);
       if(!empty($allprescription))
      {
       echo json_encode($allprescription); 
      }
      }

      public function get_advice_get(){
        header("Access-Control-Allow-Origin:*");
       $appointment_id=$this->uri->segment(5);
       $type=$this->uri->segment(4);
       $where=array('type' => $type, 'appointment_id' => $appointment_id);

       $allprescription=$this->PrescriptionsModel->advices($where);

       if(!empty($allprescription))
      {
      
       echo json_encode($allprescription); 
      }
    }


      public function get_doctor_info_get(){
        header("Access-Control-Allow-Origin:*");
       $appointment_id=$this->uri->segment(4);
       $where=array('id' => $appointment_id);
       $appointments=$this->common->get_data('appointment',$where);
       $doc_where=array('id' => $appointments[0]->doctor_id);
       $doctor=$this->common->get_data('doctor',$doc_where);
       if(!empty($doctor))
        {
        echo json_encode($doctor); 
        }
    }

    public function appointment_details_get(){
      header("Access-Control-Allow-Origin:*");
     $appointment_id=$this->uri->segment(4);
     $where=array('id' => $appointment_id);
     $appointments=$this->common->get_data('appointment',$where);
     if(!empty($appointments))
      {
      echo json_encode($appointments); 
      }
  }




}