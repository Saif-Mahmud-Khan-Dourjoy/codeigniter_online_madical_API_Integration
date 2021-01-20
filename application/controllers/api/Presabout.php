<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Presabout extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('presaboutmodel');
    }

    public function cc_notes($app_id){
    	{
            header("Access-Control-Allow-Origin:*");

             $cc_notes = $this->presaboutmodel->cc_notes($app_id);

             echo json_encode($cc_notes);

           }   

    }

}
