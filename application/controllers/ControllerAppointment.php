<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAppointment extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelAppointment');
    }

    public function getAppointment(){

    	$appointments=array(
		  'patient_name'=>$this->input->post('name'),
		  'age'=>$this->input->post('age'),
		  'appointment_date'=>$this->input->post('date'),	
          'user_id'=>$this->input->post('user_id'),
          'doctor_id' =>$this->input->post('doc_id'),
          

		);

		$appointment=$this->ModelAppointment->saveAppointment($appointments);

		if($appointment){
			echo 1;
		}
		else{
			echo 0;
		}

		// json_encode($appointment);


    }


}