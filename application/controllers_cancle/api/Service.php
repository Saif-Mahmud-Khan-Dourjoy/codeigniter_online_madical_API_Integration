<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Service extends CI_Controller {
 

public function __construct() {
             parent::__construct();
             $this->load->model('servicemodel');
    }

public function get_service(){
         header("Access-Control-Allow-Origin:*");

    	 $output='';
        $service_list= $this->servicemodel->get_service();
        // print_r($service_list);
        // exit();
  
            if(count($service_list)> 0)
                {
                  // $i=1;
                 foreach($service_list as $row)
                 {
                  $output .= '
                    <a href="moreservice.html?id='.$row->service_id.'" class="btn btn-info p-5 m-3 font-weight-bold text-uppercase">'.$row->service_name.'</a><br>
                  ';
                     // $i++;
                 }
                }
              

                echo $output;
    }
     
public function apply_eps(){
        header("Access-Control-Allow-Origin:*");

         $eps_apply = $this->servicemodel->apply_eps();

             if(!empty($eps_apply)){
              $new=array('valid'=>'yes');
              echo json_encode($new);
             }else{
              echo "nothing found";
             }

     }

   public function get_diagnostics(){
              header("Access-Control-Allow-Origin:*");
        $output='';
        $diagnostics= $this->servicemodel ->get_diagnostics();

            if(count($diagnostics)> 0)
                {
                    $i=1;
                 foreach($diagnostics as $row)
                 {
                  $output .='
                    <tr>
                     <td class="text-center">'.$i.'</td>
                     <td class="text-center"><a href="diagnostics_test_list.html?id='.$row->id.'" class="btn btn-info font-weight-bold text-uppercase">'.$row->name.'</a></td>
                     <td class="text-center">'.$row->phone.'</td>
                     <td class="text-center">'.$row->address.'</td>        
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

   }  

   public function get_diagnostics_tests($diag_id){
              header("Access-Control-Allow-Origin:*");
        $output='';
        $tests= $this->servicemodel ->get_diagnostics_tests($diag_id);
       

            if(count($tests)> 0)
                {
                 foreach($tests as $row)
                 {
                  $output .='<input class="m-2" type="checkbox" id="chck" name="chk[]"  value="'.$row->test_name.'"><label >'.$row->test_name.'</label> <b>'.$row->price.'</b> <br>
                    
                  ';
                   
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

 public function lists(){
     header("Access-Control-Allow-Origin:*");
    $diag_id=$this->input->post('diag_id');
    $dataes=$this->input->post('dataes');
    $user_id=$this->input->post('user_id');
    $date=$this->input->post('date');
    $time=$this->input->post('time');

    $data=array(
               'diagnostic_id'=> $diag_id,
               'test_list'=> $dataes,
               'user_id'=>$user_id ,
               'date'=>$date ,
               'time'=>$time ,
        );
    $list = $this->db->insert('tests', $data);

    if($list){
            echo 1;
        }
        else{
            echo 0;
        }


 }

}
