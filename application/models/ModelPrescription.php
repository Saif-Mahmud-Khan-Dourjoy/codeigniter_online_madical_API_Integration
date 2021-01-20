<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ModelPrescription extends CI_Model {
     
       public function createPrescription($data){
      
      $this->db->insert_batch('prescription', $data);


    }

}
