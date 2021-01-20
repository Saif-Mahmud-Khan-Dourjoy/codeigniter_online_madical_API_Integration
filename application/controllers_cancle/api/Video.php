<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require APPPATH . '/libraries/REST_Controller.php';

class Video extends CI_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('AppointmentModel');
    }
       
     public function add_room_id(){
      header("Access-Control-Allow-Origin:*");
	    $appoinment_id= $this->input->post('appointment_id');
	    $appointment_doctor_id= $this->input->post('doctor_id');
	    $appointment_patient_id= $this->input->post('patient_id');
	    $appointment_date= $this->input->post('appointment_date');
	    $appointment_s_time= $this->input->post('appointment_time');

	    $id = $this->input->post('id');
	    $s_time = $this->input->post('s_time');
	    $e_time = $this->input->post('e_time');
	    $currentTime = date("H:i");

    $data = array(
        'doctor_id'     => $appointment_doctor_id, 
        'patient_id'    => $appointment_patient_id, 
        'video_id'      => $id, 
        'appoinment_id' => $appoinment_id, 
        'notification'  => 'New Video Calling', 
        'seen_id'       => 0, 
        'appoinment_date' => $appointment_date,   
        's_time' => $appointment_s_time,   
        'date' => date('Y-m-d'),   
    );
        // return print_r($data);
    $this->db->insert('tbl_model_video_id',$data);
	    echo json_encode($data);

	    // echo $id;
  }

  public function open_video()
	{
    header("Access-Control-Allow-Origin:*");
		$appointment_doctor_video_id = $this->input->get('appointment_doctor_video_id');
		$where = array(
			'appoinment_id' => $appointment_doctor_video_id,
		);

		$data=$this->AppointmentModel->get_data('tbl_model_video_id','','');
		$video_id = $data[0]['video_id'];
		
		echo json_encode($video_id);


    }
    
    public function appointment_list()
    {
        header("Access-Control-Allow-Origin:*");
        $user_id=$this->input->post('user_id');
        $where=array('user_id' => $user_id,'status' => 2);
        $data=$this->AppointmentModel->get_data('appointment','id',$where);
        $new='';

        foreach($data as $row)
        {
            $new .='
            <tr>
             <td>'.$row['doctor_id'].'</td>
             <td>'.$row['appointment_date'].'</td>
             <td> <a href="patients_calling.html?id='.$row['id'].'" id="doc_id" class="btn btn-success btn-xs" data-id="'.$row['id'].'"> Click Here</a> </td>               
            </tr>
          ';
        }
        echo $new;

    }

    public function appointment_list1()
    {
        header("Access-Control-Allow-Origin:*");
        $user_id=$this->input->post('user_id');
        $where=array('user_id' => $user_id,'status' => 2);
        $data=$this->AppointmentModel->get_data('appointment','id',$where);
        $new='';

        foreach($data as $row)
        {
            $new .='
            <tr>
             <td>'.$row['doctor_id'].'</td>
             <td>'.$row['appointment_date'].'</td>
             <td> <a href="http://localhost/Test/videocall/patient?id='.$row['id'].'" id="doc_id" class="btn btn-success btn-xs" data-id="'.$row['id'].'"> Click Here</a> </td>               
            </tr>
          ';
        }
        echo $new;

    }

    public function appointment_details()
    {
        header("Access-Control-Allow-Origin:*");
        $id=$this->input->post('appointment_id');
        $where=array('id' => $id,'status' => 2);
        $data=$this->AppointmentModel->get_data('appointment','id',$where);
        if(!empty($data))
        {
            $new=array('valid' => 'yes',
            'appointment_id' => $data[0]['id'],
            'patient_id' => $data[0]['user_id'],
            'doctor_id' => $data[0]['doctor_id'],
            'date' =>$data[0]['appointment_date'],
            'time' => $data[0]['time']
        );
        }
        else
        {
            $new=array('valid' => 'no');
        }

        echo json_encode($new);


    }


    public function appointments_list()
    {
        header("Access-Control-Allow-Origin:*");
        $user_id=$this->input->post('user_id');
        $where=array('doctor_id' => $user_id,'status' => 1);
        $data=$this->AppointmentModel->get_data('appointment','id',$where);
        $new='';

        foreach($data as $row)
        {
            $new .='
            <tr>
             <td>'.$row['patient_name'].'</td>
             <td>'.$row['appointment_date'].'</td>
             <td> <a href="#" id="doc_id" class="btn btn-success btn-xs" data-id="'.$row['id'].'" onclick="confirm_appointment('.$row['id'].')">Confirm</a> </td>               
            </tr>
          ';
        }
        echo $new;

    }

    public function confirm_appointment()
    {
        header("Access-Control-Allow-Origin:*");
        $id=$this->input->post('id');
        $where=array('id' => $id);
        $data=array('status' => 2);
        $updated=$this->AppointmentModel->update_data('appointment',$where,$data);
        if($updated > 0)
        {
            $new=array('valid' => 'yes');
        }
        else
        {
            $new=array('valid' => 'no');
        }
        echo json_encode($new);
    }

    public function answer_call()
    {
        header("Access-Control-Allow-Origin:*");
        $id=$this->input->post('user_id');
        $where=array('doctor_id' => $id,'seen_id' => 0);
        $data=$this->AppointmentModel->get_data('tbl_model_video_id','',$where);
        if(count($data) > 0)
        {
            $new=array('valid' => 'yes','room_id' => $data[0]['video_id']);
        }
        else
        {
            $new=array('valid' => 'no');
        }
        echo json_encode($new);
    }

    public function get_details()
    {
        header("Access-Control-Allow-Origin:*");
        $id=$this->input->post('room_id');
        $room_id= '?roomid='.$id;
        $where=array('video_id' => $room_id);
        $data=$this->AppointmentModel->get_data('tbl_model_video_id','id',$where);
        if(!empty($data))
        {
            $new=array(
            'valid' => 'yes',
            'appointment_id' =>$data[0]['appoinment_id'],
            'user_id' =>$data[0]['patient_id'],
            'doctor_id' =>$data[0]['doctor_id']
            );
        }
        else
        {
            $new=array('valid' => 'no');
        }

        echo json_encode($new);


    }
  


          }
