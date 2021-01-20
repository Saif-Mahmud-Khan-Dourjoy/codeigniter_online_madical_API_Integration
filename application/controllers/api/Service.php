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
                  $output .= '<div class="page-content h-100">
                  <div class="background"></div>
                  <div class="row mx-0">
                  </div>
                  <div class="row mx-0 mt-25">
                    <div class="col">
                        <div class="row">
                             <div class="col-6">
                             <a href="moreservice.html?id='.$row->service_id.'" class="btn-img z-3 btn-menu"><img src="icon/pharmacy.png" class="btn-img img-responsive" alt=""> </a><h5 class="text-center text-dark text-uppercase">'.$row->service_name.' </h5>
                            </div></div>
                  ';
                 }
                  echo $output;
                } 

               
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

 public function get_med(){
       header("Access-Control-Allow-Origin:*");
          $medicine_name=$this->input->post('medicine_name');
            $quantity=$this->input->post('quantity');
            $mg_ml_cc=$this->input->post('mg_ml_cc');

           for ($i = 0; $i < count($this->input->post('medicine_name')); $i++)
        {
           $data[$i] = array(
               'medicine_name' => $medicine_name[$i],
               
               'quantity' => $quantity[$i],
               'mg_ml_cc' => $mg_ml_cc[$i],
              
               'user_id' => $this->input->post('user_id'),
            );

       }  

       $pres= $this->servicemodel ->get_med($data);
       if(!empty($pres)){
        echo json_encode($pres);
       }

 }

  public function support(){
           header("Access-Control-Allow-Origin:*");

             $support = $this->servicemodel->support();

             echo json_encode($support);
}  

}
