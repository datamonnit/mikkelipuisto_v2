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

      $this->load->view('templates/header');
      $this->load->view('media/category',$data);
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
      $data['images'] = $this->Media_model->get_images($category_id);

      $this->load->view('templates/header');
      $this->load->view('media/poistajamuokkaa',$data);
      $this->load->view('templates/footer');
    }

 }
