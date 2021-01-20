<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Doctorprofile extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('doctorprofilemodel');
    }

    public function get_doctorprofile($sub_dept_id){
    	header("Access-Control-Allow-Origin:*");
    	 // $output='';
        $doctor_profile= $this->doctorprofilemodel->doctorprofile($sub_dept_id);
         // if(!empty($doctor_profile)){
         // 	$new=array('data'=>$doctor_profile);
         // 	 echo json_encode($new);
         // }
         echo json_encode($doctor_profile);
       
        // exit();

        //     if(count($doctor_profile)> 0)
        //         {
        //           // $i=1;
        //          foreach($doctor_profile as $row)
        //          {
        //           $output .= '<div class="bg-dark p-3 m-3 text-light">
        //             <h3 class=".font-weight-bold">Name : '.$row->name.'</h3>
        //             <p>Specialized : '.$row->specialized.'</p>
        //             <p>Degree : '.$row->degree.'</p>
        //             <p>Email : '.$row->email.'</p>
        //             <p>Phone : '.$row->phone.'</p>
        //             <a href="appoinments.html"></a>
        //             </div>
        //             ';
                     
        //          }
        //         }
              

        //         echo $output;

    	

    }

}