<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Hospital extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('HospitalModel');
    }
         public function index_get(){

         header("Access-Control-Allow-Origin:*");
    
         $hospital= $this->HospitalModel->getHospital();

           
           if($hospital>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'Hospital Found',
           'data'=>$hospital  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No Hospital Found',
           'data'=>$hospital  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
            
    } 

       public function hospital_get(){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $hospital= $this->HospitalModel->hospital();

            if(count($hospital)> 0)
                {
                	$i=1;
                 foreach($hospital as $row)
                 {
                  $output .= '
                    <tr>
                     <td>'.$i.'</td>
                     <td>'.$row->name.'</td>
                     <td>'.$row->phone.'</td>
                     <td>'.$row->address.'</td>
                  ';
                     $i++;
                 }
                }
                else
                {
                 $output .= '<tr>
                     <td colspan="5">No Data Found</td>
                    </tr>';
                }

                echo $output;


    }

}