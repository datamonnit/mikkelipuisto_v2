<?php

class Category extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
    }

    public function delete_cat($id) {

      if (!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }

      echo $this->Category_model->delete_category($id);
      // Set Message
      $this->session->set_flashdata('category_deleted', 'Kategoria on poistettu');
      redirect('media');
      }

    public function lisaakategoria() {
      $data['title'] = 'Lisaa kategoria';

      $this->load->view('templates/header');
      $this->load->view('media/lisaakategoria',$data);
      $this->load->view('templates/footer');
    }

    public function category($category_id) {
      $data['title'] = 'Kategoria';
      $data['images'] = $this->Category_model->get_images($category_id);

      $this->load->view('templates/header');
      $this->load->view('media/category',$data);
      $this->load->view('templates/footer');

    }


    public function create(){
  // Check login
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

    $data['title'] = 'Uusi Kategoria';

    $this->form_validation->set_rules('name', 'Name', 'required');

    if ($this->form_validation->run() == FALSE){
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
    } else {
      $this->Category_model->create_category();

      // Set Message
      $this->session->set_flashdata('category_created', 'Uusi kategoria on luotu');
      redirect('media');
    }
  }

    public function index()
    {
      $this->load->view('media/lisaakategoria', array('error' => ' ' ));
    }

    public function do_upload()
    {

      $this->form_validation->set_rules('name', 'kategorian_nimi', 'required');
      $this->form_validation->set_rules('text', 'kategorian_kuvaus', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('media/lisaakategoria');
        $this->load->view('templates/footer');

        } else {

          $data = array(
            'name' => $this->input->post('name'),
            'text' => $this->input->post('text')
          );

          $new_category_id = $this->Category_model->create_category($data);

          if ( $new_category_id === false )  {
              echo "Error";
          }

        $allUploadFiles = $_FILES;

        $number_of_files_uploaded = count($_FILES['userfile']['name']);

        // Upload
          $this->load->library('upload');

            // Resize
          $this->load->library('image_lib');
          $resize_config['image_library'] = 'gd2';
          $resize_config['maintain_ratio'] = TRUE;
          $resize_config['width'] = 1920;
          $resize_config['height'] = 1080;


          for ($i = 0; $i < $number_of_files_uploaded; $i++) {

          $_FILES['userfile']['name']     = $allUploadFiles['userfile']['name'][$i];
          $_FILES['userfile']['type']     = $allUploadFiles['userfile']['type'][$i];
          $_FILES['userfile']['tmp_name'] = $allUploadFiles['userfile']['tmp_name'][$i];
          $_FILES['userfile']['error']    = $allUploadFiles['userfile']['error'][$i];
          $_FILES['userfile']['size']     = $allUploadFiles['userfile']['size'][$i];

          $config['upload_path']          = UPLOADPATH;
          $config['allowed_types']        = 'gif|jpg|png';
          $this->upload->initialize($config);

          if ( ! $this->upload->do_upload('userfile'))
          {
            echo $this->upload->display_errors('<h2>', '</h2>');

          } else {
            $data = array('upload_data' => $this->upload->data());

            $resize_config['source_image'] = $data['upload_data']['full_path']; //get original image
            $this->image_lib->clear();
            $this->upload->initialize($resize_config);

             if (!$this->image_lib->resize()) {
                 $this->handle_error($this->image_lib->display_errors());
             } else {
               // Tallennetaan kuvan nimi tietokantaan
               $this->Media_model->upload_new_category_image($data['upload_data']['file_name'], $new_category_id);

               $th_config['image_library']   = 'gd2';
               $th_config['source_image']   = $data['upload_data']['full_path'];
               $th_config['create_thumb']   = TRUE;
               $th_config['maintain_ratio'] = TRUE;
               $th_config['height']         = 198;
               $th_config['width']         = 353;
               $th_config['new_image'] = str_replace("/images/","/thumbnails/",$data['upload_data']['full_path']);

               $this->image_lib->clear();
               $this->image_lib->initialize($th_config);

               if (!$this->image_lib->resize()) {
                 $this->handle_error($this->image_lib->display_errors());
               }

               $this->session->set_flashdata('upload_success', 'Kuva on ladattu');

             }
           }
         }

         redirect(base_url().'media');

       }
    }
  }
