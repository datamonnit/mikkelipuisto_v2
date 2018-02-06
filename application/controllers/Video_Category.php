<?php

class Video_Category extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
    }

    public function delete_video_cat($id) {

      if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

      echo $this->Video_Category_model->delete_video_category($id);

      $this->session->set_flashdata('video_category_deleted', 'Videon kategoria on poistettu');
      redirect('media');
    }

    public function lisaavideokategoria() {
      $data['title'] = 'Lisaa videon kategoria';

      $this->load->view('templates/header');
      $this->load->view('media/lisaavideokategoria',$data);
      $this->load->view('templates/footer');
    }

    public function video_category($video_category_id) {
      $data['title'] = 'Video kategoria';
      $data['videos'] = $this->Video_Category_model->get_videos($video_id);
      $data['video_category_id'] = $this->Video_Category_model->get_videos($video_category_id);

      $this->load->view('templates/header');
      $this->load->view('media/video_category',$data);
      $this->load->view('templates/footer');
    }

    public function create(){

    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

    $data['title'] = 'Uusi Video Kategoria';

    $this->form_validation->set_rules('name', 'Name', 'required');

    if ($this->form_validation->run() == FALSE){
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
    } else {
      $this->Video_Category_model->create_video_category();

      $this->session->set_flashdata('category_created', 'Uusi kategoria on luotu');
      redirect('media');
    }
  }

    public function index()
    {
      $this->load->view('media/lisaavideokategoria', array('error' => ' ' ));
    }

    public function do_upload()
    {

      $this->form_validation->set_rules('name', 'kategorian_nimi', 'required');
      $this->form_validation->set_rules('text', 'kategorian_kuvaus', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('media/lisaavideokategoria');
        $this->load->view('templates/footer');

        } else {

          $data = array(
            'name' => $this->input->post('name'),
            'text' => $this->input->post('text')
          );

          // Eri modeli ja metodi tähän
          $new_category_id = $this->Video_Category_model->create_video_category($data);

          redirect(base_url().'media');

       }

     }

       public function do_video_upload()
       {

         $this->form_validation->set_rules('video_category_id', 'video_id', 'required');
         $this->form_validation->set_rules('linkki', 'videon_linkki', 'required');

         if ($this->form_validation->run() === FALSE) {
           $this->load->view('templates/header');
           $this->load->view('media/lisaavideo');
           $this->load->view('templates/footer');

           } else {

             $data = array(
               'video_category_id' => $this->input->post('video_category_id'),
               'linkki' => $this->input->post('linkki')
             );

             // Eri modeli ja metodi tähän
             $new_video_category_id = $this->Video_Category_model->add_video($data);

             redirect(base_url().'media');

          }
    }
  }
