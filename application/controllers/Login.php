<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = new stdClass();
    render_template('login/auth', $data);
  }

  public function authenticate()
  {
    if ($this->input->is_ajax_request()) {
      $post = $this->input->post();
      $this->validation->set_rules('password', 'Password', 'required');
      $this->validation->set_rules('email', 'Email', 'required');

      if ( ! $this->validation->run()) {
  			return_ajax(Array(
          'code' => false,
          'message' => $this->validation->error_array(),
          'regenerated_token' => $this->security->get_csrf_hash()
        ));
  		}else{
        $this->auth->validate_login($post);
      }

    }
    return false;
  }

  public function sign_out()
  {
    $this->auth->logout();
    redirect('');
  }

}
