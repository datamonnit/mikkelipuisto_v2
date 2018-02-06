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

  public function create_video_category($data) {
    $this->db->set('name',$data['name']);
    $this->db->set('text',$data['text']);
    if ($this->db->insert('video_categories', $data)){
      return $this->db->insert_id();
    } else {
      return false;
    }
  }

  public function get_category_intro_videos() {
    $this->db->select('url, video_categories_id');
    $query = $this->db->get('videos');
    return $query->result();
  }

  public function add_video($data){
    $this->db->set('video_categories_id',$data['video_category_id']);
    $this->db->set('url',$data['linkki']);
    $this->db->set('user_id', $this->session->userdata('user_id'));


    if ($this->db->insert('videos')){
      return $this->db->insert_id();
    } else {
      return false;
  }
}

  public function get_videos($video_category_id){

    $this->db->select('id, name, text');
    $this->db->where('video_category_id', $video_category_id);
    $query = $this->db->get('videos');
    $result = $query->result();

    return $result;
  }

}
