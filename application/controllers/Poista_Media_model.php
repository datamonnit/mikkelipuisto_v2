<?php
class Media_model extends CI_Model {

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

  public function upload_new_category_image($image_name, $image_category) {
    $data = array(
      'name' => $image_name,
      'category_id' => $image_category,
      'text' => '',
      'user_id' => $this->session->userdata('user_id')
    );

    return $this->db->insert('images', $data);
  }

    public function delete_image($id) {
     $image_file_name = $this->db->select('name')->get_where('images', array('id' => $id))->row()->name;
     $cwd = getcwd(); // save the current working Directory
     $image_file_path = $cwd."\\uploads\\images\\";
     chdir($image_file_path);
     unlink($image_file_name);
     $image_file_path = $cwd."\\uploads\\thumbnails\\";
     chdir($image_file_path);
     unlink($image_file_name);

     chdir($cwd); // restore the previous working Directory
     $this->db->where('id', $id);
     $this->db->delete('images');
     return true;
  }

}
