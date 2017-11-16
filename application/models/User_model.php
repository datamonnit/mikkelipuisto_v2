<?php
class User_model extends CI_Model {
   public function login_user($username, $password) {
    $enc_password = md5($password);

    $this->db->where('username', $username);
    $this->db->where('password', $enc_password);

    $result = $this->db->get('users');
    if($result->num_rows() == 1) {
      return $result->row(0)->id;
    } else {
      return false;
    }
  }
}
