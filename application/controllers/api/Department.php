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
                    $output .= '<div class="col-12"><div class="row">';
                  // $i=1;
                 foreach($deparment_list as $row)
                 {
                  $output .= '<div class="col-6 mt-3"><div class="card mb-3 card-dept"><div class="row"><div class="col-12"><div class="card-header border0"><a href="sub_department.html?id='.$row->dept_id.'"><h5 class="card-title">'.$row->dept_name.'</h5></a></div></div></div></div></div>';
                     // $i++;
                 }
                 $output .= '</div></div>';
                }
              

                echo $output;
    }

    public function get_sub_department($dept_id){
         header("Access-Control-Allow-Origin:*");

    	 $output='';
        $sub_deparment_list= $this->departmentmodel->sub_department($dept_id);
  
            if(count($sub_deparment_list)> 0)
                {
                    $output .= '<div class="col-12"><div class="row">';
                  // $i=1;
                 foreach($sub_deparment_list as $row)
                 {
                  $output .= '<div class="col-6 mt-3"><div class="card card-dept mb-3"><div class="row"><div class="col-12"><div class="card-header border0"><a href="doctor_profile.html?id='.$row->sub_dept_id.'"><h5 class="card-title">'.$row->sub_dept_name.'</h5></a></div></div></div></div></div>';
                     // $i++;
                 }
                 $output .= '</div></div>';
                }
                echo $output;
    }
}
                                        