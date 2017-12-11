<?php
class Media_model extends CI_Model {

  public function get_categories(){
    $query = $this->db->get('categories');
    return $query->result();
  }

  public function get_category_intro_images() {
    $this->db->select('name');
    $query = $this->db->get('images');
    return $query->result();
  }

  public function get_images($category_id){
    // var_dump($category_id);
    $this->db->select('name, text');
    $this->db->where('category_id',1);
    $query = $this->db->get('images');
    $result = $query->result();
    // var_dump($result);
    return $result;
  }
}
