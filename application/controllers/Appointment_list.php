<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_list extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelAppointment');
    }

    public function index(){
		$this->load->view('appointment_list');

    }


}