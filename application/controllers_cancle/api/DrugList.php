<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class DrugList extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('DrugListModel');
    }
       public function index_get(){

         header("Access-Control-Allow-Origin:*");
    
         $drugList= $this->DrugListModel->drugList();

           
           if($drugList>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'Drug Found',
           'data'=>$drugList  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No Drug Found',
           'data'=>$drugList  
         ),REST_Controller::HTTP_NOT_FOUND);

           }      
            
}
  public function drugList_get($store_id){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $drugList= $this->DrugListModel ->getDrugList($store_id);

            if(count($drugList)> 0)
                {
                    $i=1;
                 foreach($drugList as $row)
                 {
                  $output .='
                    <tr>
                     <td class="text-center">'.$i.'</td>
                     <td class="text-center">'.$row->medicine_name.'</td>
                     <td class="text-center">'.$row->company_name.'</td>
                     <td class="text-center">'.$row->price.'</td>
                     <td class="text-center"><a href="customerinfo.html?id='.$row->medicine_id.'&medicine_name='.$row->medicine_name.'&price='.$row->price.'&store_id='.$store_id.'" class="btn btn-info font-weight-bold text-uppercase">Buy</a></td>              
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
                // echo json_encode($drugList);


    }

}