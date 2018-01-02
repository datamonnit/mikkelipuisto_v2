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

    $this->db->select('name, text');
    $this->db->where('category_id', $category_id);
    $query = $this->db->get('images');
    $result = $query->result();

    return $result;
  }

  // Lisää metodi joka tallentaa kuvan lisäys -lomakkeen tiedot kantaan

  public function upload_image($image) {
    $slug = url_title($this->input->post('title'));

    $data = array(
      'name' => $image,
      'text' => $this->input->post('text'),
      'category_id' => $this->input->post('category_id'),
      'user_id' => $this->session->userdata('user_id')
    );

    return $this->db->insert('images', $data);
  }

}
