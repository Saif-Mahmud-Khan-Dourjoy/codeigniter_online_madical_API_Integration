<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Presaboutmodel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

    public function cc_notes($app_id){

    	$this->db->where('id',$app_id);
        $qu=$this->db->get('appointment');
        if($qu->num_rows()>0){   
        return $qu->result();
        }

    }


}