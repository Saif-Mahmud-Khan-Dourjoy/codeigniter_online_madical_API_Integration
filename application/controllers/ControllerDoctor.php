<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerDoctor extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelDoctor');
    }

     public function showDoctorRegisterpage(){
		$this->load->view('DoctorRegisterPage.php');
	}
	 public function regi(){
		$registration=array(
		  'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
		  'degree'=>$this->input->post('degree'),
		  'specialized'=>$this->input->post('specialized'),	
      'phone'=>$this->input->post('phone'),
      'password' =>$this->input->post('pass'),
      'confirm_password' =>$this->input->post('con_pass'),

		);
		$doctorregi=$this->ModelDoctor->saveDoctor($registration);

		if($doctorregi){
			echo 1;
		}
		else{
			echo 0;
		}
		// json_encode($userregi);
	}

	public function showDoctorLoginPage(){
		$this->load->view("DoctorLoginPage.php");
	}

		public function login(){
		 $phone=$this->input->post('phone'); 
         $pass=$this->input->post('pass');        
         $docinfo=$this->ModelDoctor->Doctor($phone,$pass);
         
         if(!empty($docinfo))
         {
          $new=array('valid' => "yes", 'dataes' => $docinfo);
          echo json_encode($new); 
         }
         else{
          $new=array('valid' => "no");
          echo json_encode($new); 
         }
	}

	public function doctorSearchPage(){
		$this->load->view('doctorSearchView.php');
	}

	public function doctorSearch(){
		$output='';
        $query = '';
          if($this->input->get('search_text'))
            {
             $query = $this->input->get('search_text');
            }
        $doctor= $this->ModelDoctor->getDoctor($query);

        
             $output .= '
                   <div class="table-responsive">
                   <table class="table table-bordered table-striped">
                    <tr>
                     <th>Doctor Name</th>
                     <th>Degree</th>
                     <th>Specialized</th>
                     <th>Appointment</th>                    
                    </tr>
                    ';
            if(count($doctor)> 0)
                {
                 foreach($doctor as $row)
                 {
                  $output .= '
                    <tr>
                     <td>'.$row->name.'</td>
                     <td>'.$row->degree.'</td>
                     <td>'.$row->specialized.'</td>
                 
                     <td><a href="appointmentPage?id='.$row->id.'" class="btn btn-success btn-xs">Click Here</a></td>               
                             
                    </tr>
                  ';
                 }
                }
                else
                {
                 $output .= '<tr>
                     <td colspan="5">No Data Found</td>
                    </tr>';
                }
                $output .= '</table>';
                echo $output;

	}

	 public function appointmentPage(){
	 	$this->load->view('appointmentPage.php');
	 	
	 }

}