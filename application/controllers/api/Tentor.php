<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentor extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('tentor_model');
  }

  public function index(){
    header("Content-Type: application/json");

    // kalo ini jadinya array kosong, bukan objek kosong
    // json_encode(array());
    // empty JSON
    echo json_encode(new stdClass);
  }

  public function tentor(){
    $data = $this->tentor_model->get();

    // $this->json_get($data);
    json_get($data);
  }

  public function detail_tentor($id){
    $cek = $this->tentor_model->check($id);

    if($cek->num_rows() > 0){
      $data = $this->tentor_model->get($id);
      json_get($data);
    }
    else {
      send_json(404);
    }
  }

  public function custom_tentor($start, $limit = null){
    
    if($limit == null){
      $data = $this->tentor_model->getOffset($start);
    }
    else {
      $data = $this->tentor_model->getOffset($start, $limit);
    }
    
    json_get($data);
  }

}
