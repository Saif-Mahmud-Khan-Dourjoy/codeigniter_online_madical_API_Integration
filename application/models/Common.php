<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Model {

	public function __construct() {
             parent::__construct();
             $this->load->database();
    }

    public function get_data($table,$where=NULL,$orderby=NULL,$limit=NULL)
    {
       if(!empty($where))
       {
         $this->db->where($where);
       }
       if(!empty($orderby))
       {
          $this->db->order_by($orderby,'DESC');
       }
       if(!empty($limit))
       {
         $this->db->limit($limit);
       }
      $query=$this->db->get($table);
      return $query->result();
    }


 



 }