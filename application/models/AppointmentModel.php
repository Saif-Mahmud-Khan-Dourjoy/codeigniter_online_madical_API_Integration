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

    $date=$this->input->post('appointment_date');
    $doc_id=$this->input->post('doc_id');
    $user_id=$this->input->post('user_id');

    $doctor=$this->db->where('id',$doc_id)->get('doctor')->result();
    $charge=$doctor[0]->charge;

    $wallet_balance=$this->db->where('user_id',$user_id)->get('wallet')->result();
    $balance=$wallet_balance[0]->amount;

    if($balance >= $charge)
    {
    $this->db->where('appointment_date',$date);
    $this->db->where('doctor_id',$doc_id);
    $this->db->order_by('id','DESC');
    $this->db->limit(1);
    $query=$this->db->get('appointment')->result_array();
    if(!empty($query))
    {
        $last_time=$query[0]['time'];
        $endTime = strtotime("+15 minutes", strtotime($last_time));
        $time=date('h:i:s', $endTime);
        
    $data=array(
            'patient_name'      => $this->input->post('patient_name'), 
            'appointment_date'  => $this->input->post('appointment_date'),
            'doctor_id'         => $this->input->post('doc_id'),
            'doctor_name'         => $this->input->post('doc_name'),
            'user_id'         => $this->input->post('user_id'),
            'age'         => $this->input->post('age'),
            'time' => $time,
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address')
        );
    $this->db->insert('appointment',$data);
    $result=$this->db->insert_id();

    $wallet_data=array('appointment_id' => $result,'amount' => $charge);
    $this->db->insert('useage_history',$wallet_data);

    $this->db->set('amount', 'amount-'.$charge.'', FALSE);
    $this->db->where('user_id', $user_id);
    $this->db->update('wallet');


    $new=array('valid' => 'yes',);
    echo json_encode($new);

    //return $result;
    }
    else
    {
        $this->db->where('id',$doc_id);
        $start=$this->db->get('doctor')->result_array();
        $duty_start=$start[0]['duty_start'];
        // echo $duty_start;
        // exit;
        $data=array(
            'patient_name'      => $this->input->post('patient_name'), 
            'appointment_date'  => $this->input->post('appointment_date'),
            'doctor_id'         => $this->input->post('doc_id'),
            'doctor_name'         => $this->input->post('doc_name'),
            'user_id'         => $this->input->post('user_id'),
            'age'         => $this->input->post('age'),
            'time' => $duty_start,
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address')
        );
    $this->db->insert('appointment',$data);
    $result=$this->db->insert_id();

    $wallet_data=array('appointment_id' => $result,'amount' => $charge);
    $this->db->insert('useage_history',$wallet_data);

    $this->db->set('amount', 'amount-'.$charge.'', FALSE);
    $this->db->where('user_id', $user_id);
    $this->db->update('wallet');
    

    $new=array('valid' => 'yes',);
    echo json_encode($new);

    }
    }

    else
    {
        $new=array('valid' => 'no',);
        echo json_encode($new);
    }
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

   public function getAllAppointment($id){
    $last_time=date('h:i:s');
    $startTime = strtotime("-15 minutes", strtotime($last_time));
    $time=date('h:i:s', $startTime);
    
      $today=date('Y-m-d');
      $this->db->select("*");
      $this->db->where('user_id',$id);
      $this->db->order_by('id','DESC');
    //   $this->db->where('appointment_date',$today);
    //   $this->db->where('time <=',$last_time);
    //   $this->db->where('time >=',$time);
    //   $this->db->where('status',1);
           $this->db->from("appointment"); 
          $qu=$this->db->get();
          return $qu->result();

   }


 }
