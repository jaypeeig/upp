<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthcheck extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('phantom');
	}

	public function index()
	{
		$pingBack = $this->phantom->send_get_request('http://localhost/uncloset');
		var_dump($pingBack);
	}

}
