<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class User extends REST_Controller {

	public function __construct() {
             parent::__construct();
             // $this->load->database();
             $this->load->model('UserModel');
    }
       public function index_get(){

         header("Access-Control-Allow-Origin:*");
         $users=$this->UserModel->getUsers();

           if($users>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'User Found',
           'data'=>$users  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No User Found',
           'data'=>$users  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
        
           
} 

      public function login_post(){
         header("Access-Control-Allow-Origin:*");
         $email=$this->input->post('email'); 
         $password=$this->input->post('password');        
         $userinfo=$this->UserModel->user($email,$password);
         
         if(!empty($userinfo))
         {
          $new=array('valid' => "yes", 'dataes' => $userinfo);
          echo json_encode($new); 
         }
         else{
          $new=array('valid' => "no");
          echo json_encode($new); 
         }
              
          
      }


        public function regi_post()

           {
            header("Access-Control-Allow-Origin:*");

             $users['user'] = $this->UserModel->saveUser();

             echo json_encode($users);

           }   

        public function individualUser_get($user_id){
           
            header("Access-Control-Allow-Origin:*");

            $individualuser= $this->UserModel->individualUser($user_id);


          if(!empty($individualuser))
         {
         
          echo json_encode($individualuser); 
         }


        }   

        public function updateUser_post($user_id){
           header("Access-Control-Allow-Origin:*");

           $userupdate= $this->UserModel->saveUpdatedUser($user_id);

           if( $userupdate){
            echo 1;
             }
              else{
              echo 0;
           }
        }

 }




















    


