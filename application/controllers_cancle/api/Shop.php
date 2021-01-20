<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Shop extends REST_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('ShopModel');
    }
         public function index_get(){

         header("Access-Control-Allow-Origin:*");
    
         $shop= $this->ShopModel->getshop();

           
           if($shop>0){
             $this->response(array(
           
           'status'=>1,
           'message'=>'Shop Found',
           'data'=>$shop  
         ),REST_Controller::HTTP_OK);

           }else{
            $this->response(array(
           
           'status'=>0,
           'message'=>'No Shop Found',
           'data'=>$shop  
         ),REST_Controller::HTTP_NOT_FOUND);

           }
            
    } 

       public function shop_get(){
       header("Access-Control-Allow-Origin:*");
        $output='';
        $shop= $this->ShopModel->shop();

            if(count($shop)> 0)
                {
                	$i=1;
                 foreach($shop as $row)
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