<?php

class Users extends CI_Controller {

  public function login() {
    $this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]|max_length[50]');

    if($this->form_validation->run() == FALSE) {
      $data['title'] = 'Kirjaudu';
      $this->load->view('templates/header');
      $this->load->view('users/login',$data);
      $this->load->view('templates/footer');

      $username = $this->input->post('username');
      $password = $this->input->post('password');

    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user_id = $this->User_model->login_user($username, $password);

      if($user_id) {
        $user_data = array(
          'user_id'   => $user_id,
          'username'  => $username,
          'logged_in' => true
        );

        $this->session->set_userdata($user_data);

        $this->session->set_flashdata('login_success', 'Olet kirjautunut sisään');
        redirect('pages/view');
      } else {
        $this->session->set_flashdata('login_failed', 'Väärä käyttäjänimi tai salasana');
        redirect('users/login');
      }
    }
  }
}
