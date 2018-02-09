<?php
  class Media extends CI_Controller {

    public function index() {
      $data['title'] = 'Media';
      $data['categories'] = $this->Category_model->get_categories();
      $data['images'] = $this->Category_model->get_category_intro_images();
      $data['video_categories'] = $this->Video_Category_model->get_video_categories();
      $data['videos'] = $this->Video_Category_model->get_category_intro_videos();

      $this->load->view('templates/header');
      $this->load->view('media/view',$data);
      $this->load->view('templates/footer');
    }

    public function lisaakuva() {
      $data['title'] = 'Lisaa kuva';
      $data['categories'] = $this->Category_model->get_categories();

      $this->load->view('templates/header');
      $this->load->view('media/lisaakuva',$data);
      $this->load->view('templates/footer');
    }

    public function lisaavideo() {
      $data['title'] = 'Lisaa video';
      $data['video_categories'] = $this->Video_Category_model->get_video_categories();

      $this->load->view('templates/header');
      $this->load->view('media/lisaavideo',$data);
      $this->load->view('templates/footer');
    }

    public function videot($video_categories_id) {
      $data['title'] = 'Videoita';
      $data['videos'] = $this->Media_model->get_videos($video_categories_id);

      $this->load->view('templates/header');
      $this->load->view('media/videot',$data);
      $this->load->view('templates/footer');
    }

    public function poistajamuokkaavideoita($video_id) {
      $data['title'] = 'Poista ja muokkaa videoita';
      $data['videos'] = $this->Media_model->get_videos($video_id);

      $this->load->view('templates/header');
      $this->load->view('media/poistajamuokkaavideoita',$data);
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

    public function delete_video($video_id) {

      if (!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }

      $this->Media_model->delete_video($video_id);
      $this->session->set_flashdata('video_deleted', 'Video on poistettu');

      redirect('media');

    }

    public function edit_image_description(){
      // Ajax-kutusun käynnistäminen, mukana data
      $data = array(
        'desc' => $this->input->post('desc'),
        'id' => $this->input->post('id')
      );

      // echo json_encode($data);
    if ($this->Media_model->edit_image_description($data)) {
        $kissa = array(
          'message' => 'Jippii!'
        );
    } else {
      $kissa = array(
        'message' => 'Voi ei!!'
      );
    }
    echo json_encode($kissa);

      // Viewiessä js-functio, joka käynnistetään Enter-painalluksella?

      // Modeliin metodi, joka tallentaa tiedot tietokantaan
      // UPDATE-komento

      // Controlleri lähettää selaimelle tiedon, että tallennus onnistui
    }


}
