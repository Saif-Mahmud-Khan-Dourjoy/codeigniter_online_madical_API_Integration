<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerUser extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelUser');
	}
	// public function index()
	// {
	// 	echo "hello";
	// }

	public function registerAs(){
		$this->load->view('regilog/registerAs.php');
	}
	public function loginAs(){
		$this->load->view('regilog/loginAs.php');
	}



	public function showUserRegisterpage(){
		$this->load->view('userRegisterPage.php');
	}

	public function regi(){
		$registration=array(
          'phone'=>$this->input->post('phone'),
          'email'=>$this->input->post('email'),
          'name'=>$this->input->post('name'),
          'password' =>$this->input->post('pass'),
          'confirm_password' =>$this->input->post('con_pass'),

		);
		$userregi=$this->ModelUser->saveUser($registration);

		if($userregi){
			echo 1;
		}
		else{
			echo 0;
		}
		// json_encode($userregi);
	}

	public function showUserLoginPage(){
		$this->load->view("userLoginPage.php");
	}

	public function login(){
		 $phone=$this->input->post('phone'); 
         $password=$this->input->post('pass');        
         $userinfo=$this->ModelUser->user($phone,$password);
         
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

	public function homePage(){
		$this->load->view('gen/homePage.php');
	}

}
