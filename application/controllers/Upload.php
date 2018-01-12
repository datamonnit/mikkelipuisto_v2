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
          // $config['max_size']             = 1000000;
          // $config['max_width']            = 1920;
          // $config['max_height']           = 1080;

          $this->load->library('upload', $config);

          // array(1) {
          //    ["upload_data"]=> array(14) {
          //      ["file_name"]=> string(10) "test13.JPG"
          //      ["file_type"]=> string(10) "image/jpeg"
          //      ["file_path"]=> string(50) "C:/xampp/htdocs/mikkelipuisto_uusi/uploads/images/"
          //      ["full_path"]=> string(60) "C:/xampp/htdocs/mikkelipuisto_uusi/uploads/images/test13.JPG"
          //      ["raw_name"]=> string(6) "test13"
          //      ["orig_name"]=> string(9) "test1.JPG"
          //      ["client_name"]=> string(9) "test1.JPG"
          //      ["file_ext"]=> string(4) ".JPG"
          //      ["file_size"]=> float(4678.01)
          //      ["is_image"]=> bool(true)
          //      ["image_width"]=> int(4608)
          //      ["image_height"]=> int(2592)
          //      ["image_type"]=> string(4) "jpeg"
          //      ["image_size_str"]=> string(26) "width="4608" height="2592""
          //    }
          //  }


          if ( ! $this->upload->do_upload('userfile'))
          {
            echo $this->upload->display_errors();
            // $error = array('error' => $this->upload->display_errors());
            // $this->load->view('mikkelipuisto_uusi/media', $error);
          } else {
            $data = array('upload_data' => $this->upload->data());

            //$post_image = $_FILES['userfile']['name'];
             $config['image_library'] = 'gd2';
             $config['source_image'] = $data['upload_data']['full_path']; //get original image
             $config['maintain_ratio'] = TRUE;
             $config['width'] = 1920;
             $config['height'] = 1080;
             $this->load->library('image_lib', $config);
             if (!$this->image_lib->resize()) {
                 $this->handle_error($this->image_lib->display_errors());
             }

            $this->image_lib->clear();

            // Tallennetaan kuvan nimi tietokantaan
            $this->Media_model->upload_image($data['upload_data']['file_name']);

            $th_config['image_library']   = 'gd2';
            $th_config['source_image']   = $data['upload_data']['full_path'];
            $th_config['create_thumb']   = TRUE;
            $th_config['maintain_ratio'] = TRUE;
            $th_config['height']         = 198;
            $th_config['width']         = 353;
            $th_config['new_image'] = str_replace("/images/","/thumbnails/",$data['upload_data']['full_path']);

            echo "<p>data</p>";
            var_dump($data);

            echo "<p>th_config</p>";
            var_dump($th_config);

            $this->load->library('image_lib', $th_config);
            if (!$this->image_lib->resize()) {
                $this->handle_error($this->image_lib->display_errors());
            }

            $this->session->set_flashdata('upload_success', 'Kuva on ladattu');
            // $this->load->view('media/index');
            // redirect('http://localhost/mikkelipuisto_uusi');
          }
        }
      }
}