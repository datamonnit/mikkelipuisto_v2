<?php
  class Media extends CI_Controller {

    public function index() {
      $data['title'] = 'Media';
      $data['categories'] = $this->Category_model->get_categories();
      $data['images'] = $this->Category_model->get_category_intro_images();

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

    public function edit_image_description($desc, $image_id){
      // Ajax-kutusun käynnistäminen, mukana data
    $data = array(
    'username' => $this->input->post('name'),
    'pwd'=>$this->input->post('pwd')
    );

      // Viewiessä js-functio, joka käynnistetään Enter-painalluksella?

      // Modeliin metodi, joka tallentaa tiedot tietokantaan
      // UPDATE-komento

      // Controlleri lähettää selaimelle tiedon, että tallennus onnistui
    }


}
