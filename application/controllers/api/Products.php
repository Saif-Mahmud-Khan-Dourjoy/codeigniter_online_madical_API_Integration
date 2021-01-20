<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
             parent::__construct();
             $this->load->database();
             $this->load->model('common');
    }

    public function get_popular_products()
    {
      header("Access-Control-Allow-Origin:*");
      $data['products']=$this->common->get_data('products','','sale_count');
        $html=$this->load->view('app/products',$data,TRUE);
      echo $html;
    }

    public function get_new_products()
    {
      header("Access-Control-Allow-Origin:*");
      $data['products']=$this->common->get_data('products','','id');
        $html=$this->load->view('app/products',$data,TRUE);
      echo $html;
    }




}