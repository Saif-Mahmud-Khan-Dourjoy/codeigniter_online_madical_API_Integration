<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Customer extends REST_Controller {

	public function __construct() {
             parent::__construct();
             // $this->load->database();
             $this->load->model('CustomerModel');
    }
       public function index_get(){

         header("Access-Control-Allow-Origin:*");
         $customer=$this->CustomerModel->getCustomers();

           if($customer>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'User Found',
           'data'=>$customer  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No User Found',
           'data'=>$customer  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
        
           
} 
     public function info_post(){
       header("Access-Control-Allow-Origin:*");
       $data=array(
        'email'         => $this->input->post('email'), 
        'name'          => $this->input->post('name'), 
        'phone'         => $this->input->post('phone'), 
        'quantity'      => $this->input->post('quantity'), 
        'address'       => $this->input->post('address'), 
        'medicine_id'   => $this->input->post('medicine_id'), 
        'medicine_name' => $this->input->post('medicine_name'), 
        'price'         => $this->input->post('price'),
        'total_price'   => $this->input->post('total_price'),
        'store_id'      => $this->input->post('store_id'),

      );
          $customers['customers'] = $this->CustomerModel->saveCustomer($data); 
          echo json_encode($customers);


     }
}