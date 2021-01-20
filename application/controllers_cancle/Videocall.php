<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videocall extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelAppointment');
    }

    public function index(){
		$this->load->view('appointments');

    }

    public function patient()
    {
      $this->load->view('patient_calling');
    }

    public function doctor()
    {
      $this->load->view('doctor_calling');
    }


}