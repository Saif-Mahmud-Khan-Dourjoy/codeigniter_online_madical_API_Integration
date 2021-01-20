<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelAppointment');
    }

    public function index()
    {
    $this->header();
    $this->load->view('frontend/about');
    $this->footer();
    }

    public function header()
    {
      $this->load->view('common/header');
    }
    public function footer()
    {
      $this->load->view('common/footer');
    }


}