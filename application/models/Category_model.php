<?php
class Category_model extends CI_Model {

  public function get_categories(){
    $query = $this->db->get('categories');
    return $query->result();
  }

  public function delete_category($id) {
   $this->db->where('id', $id);
   $this->db->delete('categories');
   return true;
  }

  public function create_category($data) {
    $this->db->set('name',$data['name']);
    $this->db->set('text',$data['text']);
    if ($this->db->insert('categories', $data)){
      return $this->db->insert_id();
    } else {
      return false;
    }
  }

  public function get_category_intro_images() {
    $this->db->select('name, category_id');
    $query = $this->db->get('images');
    return $query->result();
  }

  public function get_images($category_id){

    $this->db->select('id, name, text');
    $this->db->where('category_id', $category_id);
    $query = $this->db->get('images');
    $result = $query->result();

    return $result;
  }

}
