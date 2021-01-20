<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Department extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('departmentmodel');
    }

public function get_department(){
         header("Access-Control-Allow-Origin:*");

    	 $output='';
        $deparment_list= $this->departmentmodel->department();
  
            if(count($deparment_list)> 0)
                {
                  // $i=1;
                 foreach($deparment_list as $row)
                 {
                  $output .= '
                    <a href="sub_department.html?id='.$row->dept_id.'" class="btn btn-info p-5 m-3 font-weight-bold text-uppercase">'.$row->dept_name.'</a><br>
                  ';
                     // $i++;
                 }
                }
              

                echo $output;
    }

    public function get_sub_department($dept_id){
         header("Access-Control-Allow-Origin:*");

    	 $output='';
        $sub_deparment_list= $this->departmentmodel->sub_department($dept_id);
  
            if(count($sub_deparment_list)> 0)
                {
                  // $i=1;
                 foreach($sub_deparment_list as $row)
                 {
                  $output .= '
                    <a href="doctor_profile.html?id='.$row->sub_dept_id.'" class="btn btn-info p-5 m-3 font-weight-bold text-uppercase">'.$row->sub_dept_name.'</a><br>
                  ';
                     // $i++;
                 }
                }
              

                echo $output;
    }



}
