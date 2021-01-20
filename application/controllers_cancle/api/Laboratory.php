<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Laboratory extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('laboratorymodel');
    }


     public function login(){
         header("Access-Control-Allow-Origin:*");
         $author_name=$this->input->post('author_name'); 
         $password=$this->input->post('password');        
         $info=$this->laboratorymodel->user($author_name,$password);
         
         if(!empty($info))
         {
          $new=array('valid' => "yes", 'dataes' => $info);
          echo json_encode($new); 
         }
         else{
          $new=array('valid' => "no");
          echo json_encode($new); 
         }
              
          
      }
      public function test_add()

           {
            header("Access-Control-Allow-Origin:*");

             $test['test'] = $this->laboratorymodel->saveTest();

             echo json_encode($test);

           }   

      public function tests($diag_id){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $tests= $this->laboratorymodel ->getTests($diag_id);

            if(count($tests)> 0)
                {
                    $i=1;
                 foreach($tests as $row)
                 {
                  $output .='
                    <tr>
                     <td class="text-center">'.$i.'</td>
                     <td class="text-center">'.$row->user_id.'</td>
                     <td class="text-center">'.$row->test_list.'</td>
                     <td class="text-center">'.$row->date.'</td>
                     <td class="text-center">'.$row->time.'</td>
                     <td class="text-center"><a class="btn btn-info" href="result.html?user_id='.$row->user_id.'&tests='.$row->test_list.'">Result</a></td>
                               
                    </tr>
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
                // echo json_encode($tests);


    }     

     public function test_result()

           {
           header("Access-Control-Allow-Origin:*");

           
            $arr=$this->input->post('arr');
            $testArr=$this->input->post('testArr');
            $user_id=$this->input->post('user_id');
            $diag_id=$this->input->post('diag_id');
            $result=array_combine($testArr, $arr);

            $res=json_encode($result);
            
            $data=array(
               'user_id'               => $user_id,
               'diagnostic_center_id'  => $diag_id,
               'test_result'           => $res,
            );

            $re = $this->db->insert('tests_result', $data);

            if($re){
            	echo 1;
            }else{
            	echo 0;
            }


           } 


   public function get_individual_result($user_id){
         header("Access-Control-Allow-Origin:*");

   
        $res= $this->laboratorymodel->get_individual_result($user_id);

        echo json_encode($res);
       
    }

   public function get_appoint_doctor($t_user_id){
      header("Access-Control-Allow-Origin:*");
      // echo $t_user_id;
      // exit();
      $share_doc= $this->laboratorymodel->get_appoint_doctor($t_user_id);

        echo json_encode($share_doc);

   }

   public function get_result_for_doctor($t_id){
         header("Access-Control-Allow-Origin:*");
  
      $share_to_doc= $this->laboratorymodel->get_result_for_doctor($t_id);

        echo json_encode($share_to_doc);

   }

        

}