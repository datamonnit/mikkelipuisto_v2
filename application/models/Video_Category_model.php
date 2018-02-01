<?php
class Video_Category_model extends CI_Model {

  public function get_video_categories(){
    $query = $this->db->get('video_categories');
    return $query->result();
  }

  public function delete_video_category($id) {
   $this->db->where('id', $id);
   $this->db->delete('video_categories');
   return true;
  }

  public function create_category($data) {
    $this->db->set('name',$data['name']);
    $this->db->set('text',$data['text']);
    if ($this->db->insert('video_categories', $data)){
      return $this->db->insert_id();
    } else {
      return false;
    }
  }

  public function get_category_intro_images() {
    $this->db->select('name, video_category_id');
    $query = $this->db->get('videos');
    return $query->result();
  }

  public function get_images($video_category_id){

    $this->db->select('id, name, text');
    $this->db->where('video_category_id', $video_category_id);
    $query = $this->db->get('images');
    $result = $query->result();

    return $result;
  }

}
