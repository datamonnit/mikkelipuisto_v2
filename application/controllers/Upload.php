<?php

class Upload extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
      $this->load->view('media/lisaakuva', array('error' => ' ' ));
    }

    public function do_upload()
    {

      $this->form_validation->set_rules('category_id', 'Category', 'required');
      $this->form_validation->set_rules('text', 'Text', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

        } else {

          $config['upload_path']          = "C:\\xampp\\htdocs\\mikkelipuisto_uusi\\uploads\\images";
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 2000;
          $config['max_width']            = 2000;
          $config['max_height']           = 2000;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('userfile'))
          {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('mikkelipuisto_uusi/media', $error);
          } else {
            $data = array('upload_data' => $this->upload->data());
            // var_dump($data);
            $post_image = $_FILES['userfile']['name'];

            $this->Media_model->upload_image($data['upload_data']['file_name']);

            $th_config['image_library']   = 'gd2';
            $th_config['source_image']   = $data['upload_data']['full_path'];
            $th_config['create_thumb']   = TRUE;
            $th_config['maintain_ratio'] = TRUE;
            $th_config['height']         = 198;
            $th_config['width']         = 353;

            $th_config['new_image'] = str_replace("/images/","/thumbnails/",$data['upload_data']['full_path']);
            var_dump($th_config['new_image']);

            $this->load->library('image_lib', $th_config);

            echo $this->image_lib->resize();
            echo $this->image_lib->display_errors('<p>', '</p>');




            $this->session->set_flashdata('upload_success', 'Kuva on ladattu');
            // $this->load->view('media/index');
            redirect('http://localhost/mikkelipuisto_uusi');
          }
        }
      }
}
