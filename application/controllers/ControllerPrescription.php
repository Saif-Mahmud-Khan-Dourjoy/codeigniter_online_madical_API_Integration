<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPrescription extends CI_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->model('ModelPrescription');
    }

    public function prescriptionViewPage(){
    	$this->load->view('prescription_view_page.php');
    }

    public function giveprescription(){
    	    $medicine_name=$this->input->post('medicine_name');
            $timez=$this->input->post('timez');
            $beforeAfter=$this->input->post('beforeAfter');
            $quantity=$this->input->post('quantity');

           for ($i = 0; $i < count($this->input->post('medicine_name')); $i++)
        {
           $data[$i] = array(
               'medicine_name' => $medicine_name[$i],
               'timez' => $timez[$i],
               'beforeAfter' => $beforeAfter[$i],
               'quantity' => $quantity[$i],
               'doc_id'=>$this->input->post('doc_id'),
               'user_id' => $this->input->post('user_id'),
            );

       }  

        $this->ModelPrescription->createPrescription($data);
    }
	}