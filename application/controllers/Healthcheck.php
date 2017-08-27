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
		$content = $this->phantom->init();
		var_dump($content);
	} 
    
}
