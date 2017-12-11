<?php
  class Media extends CI_Controller {

    public function index() {
      $data['title'] = 'Media';
      $data['categories'] = $this->Media_model->get_categories();
      $data['images'] = $this->Media_model->get_category_intro_images('name');

      $this->load->view('templates/header');
      $this->load->view('media/view',$data);
      $this->load->view('templates/footer');
    }

    public function category($category_id) {
      $data['title'] = 'Kategoria';
      $data['images'] = $this->Media_model->get_images($category_id);
      // var_dump($data['images']);
      $this->load->view('templates/header');
      $this->load->view('media/category',$data);
      $this->load->view('templates/footer');
    }
 }
