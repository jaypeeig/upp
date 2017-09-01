<?php if(!defined('BASEPATH')) die('No direct script access allowed.');

class AuthHook {

	protected $ci;

	public function __construct() {
		$this->ci = &get_instance();
	}

	public function redirect_fix () {

		if (( ! $this->ci->auth->is_logged_in()) AND
			( ! ($this->ci->router->fetch_class() == 'login') AND
				($this->ci->router->fetch_method() == 'index') )) {
					redirect('login');
		}

	}

}
