<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentor_model extends CI_Model {

  public function get($id = false){
    if($id == false){
      $q = $this->db->get('tentor');
      return $q->result();
    }

    $q = $this->db->get_where('tentor', ['id' => $id]);
    return $q->row();
  }

  public function getOffset($start, $offset = false){
    if($offset === false){
      $this->db->limit($start);
    }
    else {
      $this->db->limit($offset, $start);
    }

    $q = $this->db->get('tentor');
    return $q->result();
  }

  public function check($id){
    return $this->db->get_where('tentor', ['id' => $id]);
  }

  public function checkUsername($email){
    return $this->db->get_where('tentor', ['email' => $email]);
  }

}