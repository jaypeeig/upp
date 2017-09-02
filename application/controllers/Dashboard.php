<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = new stdClass();
    render_template('dashboard/graphs', $data);
  }

}
