<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelAppointment');
    }

    public function index()
    {
    $this->header();
    $this->load->view('frontend/home');
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