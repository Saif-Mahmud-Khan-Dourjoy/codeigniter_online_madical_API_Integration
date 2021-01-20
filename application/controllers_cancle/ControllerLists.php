<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLists extends CI_Controller {

	  public function __construct() {
             parent::__construct();
             $this->load->model('ModelLists');
    }

     public function listsViewPage(){
     	$this->load->view('listsViewPage.php');
     }

     public function getHospitals(){
       
        $output='';
        $hospital= $this->ModelLists->hospital();

            if(count($hospital)> 0)
                {
                  $i=1;
                 foreach($hospital as $row)
                 {
                  $output .= '
                    <tr>
                    <td>'.$i.'</td>
                    <td class="text-success">'.$row->name.'</td>
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

    public function getdiagnostic(){
       
        $output='';
        $diagnostic= $this->ModelLists->diagnostic();

            if(count($diagnostic)> 0)
                {
                  $i=1;
                 foreach($diagnostic as $row)
                 {
                  $output .= '
                    <tr>
                    <td>'.$i.'</td>
                    <td class="text-success">'.$row->name.'</td>
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

    public function getdrug_store(){
       
        $output='';
        $drug_store= $this->ModelLists->drug_store();

            if(count($drug_store)> 0)
                {
                  $i=1;
                 foreach($drug_store as $row)
                 {
                  $output .= '
                    <tr>
                    <td>'.$i.'</td>
                    <td><a href="drugListViewPage?id='.$row->id.'" class="text-info font-weight-bold text-uppercase">'.$row->name.'</a> </td>
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
      public function drugListViewPage(){
      	$this->load->view('drug_list_view.php');
      }

      public function getMedicine($store_id){
        $medicine= $this->ModelLists->getmedicines($store_id);
        echo json_encode($medicine);


    }


 }