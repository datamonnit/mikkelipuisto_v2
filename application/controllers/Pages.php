<?php
  class Pages extends CI_Controller {
    public function view($page = 'etusivu') {
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        show_404();
      }

      $data['title'] = ucfirst($page);

      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
    }

    public function save_html()
    {
      header("Content-type: application/json; charset=utf-8");

      $html = $this->input->post('html');
      // Mihin tallennetaan
      if (file_put_contents(FCPATH."application/views/pages/yhteystiedotmuokkaus.php",$html) > 0) {
        $data = array(
          'status' => 'ok'
        );
      } else {
        $data = array(
          'status' => 'error'
        );
      }

      echo json_encode($data);

    }
  }
