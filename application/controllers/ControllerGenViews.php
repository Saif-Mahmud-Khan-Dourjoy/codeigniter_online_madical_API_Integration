<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerGenViews extends CI_Controller {

	public function homePage(){
		$this->load->view('gen/homePage.php');
	}

}
