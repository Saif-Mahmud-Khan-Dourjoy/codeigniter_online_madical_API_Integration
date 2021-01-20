<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class DrugStore extends REST_Controller {

  public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('DrugStoreModel');
    }
         public function index_get(){

         header("Access-Control-Allow-Origin:*");
    
         $drugStore= $this->DrugStoreModel->getDrugStore();

           
           if($drugStore>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'Drug Store Found',
           'data'=>$drugStore  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No Drug Store Found',
           'data'=>$drugStore  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
            
    } 

       public function drugStore_get(){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $drugStore= $this->DrugStoreModel->drugStore();

            if(count($drugStore)> 0)
                {
                  $i=1;
                 foreach($drugStore as $row)
                 {
                  $output .= '
                    <tr>
                    <td>'.$i.'</td>
                    <td><a href="druglist.html?id='.$row->id.'" class="text-info font-weight-bold text-uppercase">'.$row->name.'</a> </td>
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