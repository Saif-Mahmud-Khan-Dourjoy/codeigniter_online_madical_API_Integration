<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class AppointmentModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

     public function getAppointment($patient_name){
                 
           $query=$this->db->get('appointment');
            return $query->row();
}

    public function saveAppointment(){
    	$data=array(
    		    'patient_name'      => $this->input->post('patient_name'), 
				'appointment_date'  => $this->input->post('appointment_date'),
                'doctor_id'         => $this->input->post('doc_id'),
                'doctor_name'         => $this->input->post('doc_name'),
                'user_id'         => $this->input->post('user_id'),
                'age'         => $this->input->post('age'),
			);
		$this->db->insert('appointment',$data);
        $result=$this->db->insert_id();
		return $result;
    }
    public function get_data($table = NULL, $orderby = NULL, $where = NULL) {

        $this->db->select('*');
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, "DESC");
        }

        $result = $this->db->get()->result_array();
        return $result;
    }

    public function update_data($table,$where,$data)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
        return $this->db->affected_rows();
    }

   public function getAllAppointment(){
      
      $this->db->select("*");
           $this->db->from("appointment"); 
          $qu=$this->db->get();
          return $qu->result();

   }
 }
