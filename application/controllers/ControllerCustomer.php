<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerCustomer extends CI_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->model('ModelCustomer');
    }

    public function customerInfoPage(){
    	$this->load->view('customerInfoPage.php');
    }

    public function customerInfo(){
       $medicine_name=$this->input->post('medicine_name');
       $price=$this->input->post('price');
       $count=$this->input->post('count');
       $item_cost=$this->input->post('item_cost');

        for ($i = 0; $i < count($this->input->post('medicine_name')); $i++)
        {
           $data[$i] = array(
               'medicine_name' => $medicine_name[$i],
               'price'         => $price[$i],
               'count'         => $count[$i],
               'item_cost'     => $item_cost[$i],
               'email'         => $this->input->post('email'),
               'name'          => $this->input->post('name'), 
               'phone'         => $this->input->post('phone'),
               'address'       => $this->input->post('address'),
               'total_cost'    => $this->input->post('total_cost'),
               'user_id'       => $this->input->post('user_id'),
               'store_id'       => $this->input->post('store_id'),
            );
       }  
   
          $customers['customers'] = $this->ModelCustomer->saveCustomer($data); 
          echo json_encode($customers);


     }
    }
