<?php
  class Media extends CI_Controller {

    public function index() {
      $data['title'] = 'Media';
      $data['categories'] = $this->Category_model->get_categories();
      $data['images'] = $this->Category_model->get_category_intro_images('name');

      $this->load->view('templates/header');
      $this->load->view('media/view',$data);
      $this->load->view('templates/footer');
    }

    public function lisaakuva() {
      $data['title'] = 'Lisaa kuva';

      $this->load->view('templates/header');
      $this->load->view('media/lisaakuva',$data);
      $this->load->view('templates/footer');
    }

    public function poistajamuokkaa($category_id) {
      $data['title'] = 'Poista ja muokkaa';
      $data['images'] = $this->Category_model->get_images($category_id);

      $this->load->view('templates/header');
      $this->load->view('media/poistajamuokkaa',$data);
      $this->load->view('templates/footer');
    }

    public function delete($image_id) {

    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

    $this->Media_model->delete_image($image_id);
    $this->session->set_flashdata('image_deleted', 'Kuva on poistettu');

    redirect('media');

    }

}
