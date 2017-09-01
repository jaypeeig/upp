<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth {

	protected $ci;

	function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->library('session');
	}

	function validate_login($credentials)
	{
		$tmp['code'] = false;
		$tmp['regenerated_token'] = $this->ci->security->get_csrf_hash();

		if (isset($credentials['email'], $credentials['password'])) {
			if (preg_match('/gmail/', $credentials['email'])) {
				$this->ci->session->set_userdata(array(
								'user_id'	=> '1',
								'name' => 'foobar'
						));
				$tmp['code'] = true;
				$this->ci->session->set_flashdata('welcome_message', 'Welcome back your grace! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor');
			}
		}
		return_ajax($tmp);
	}

	function is_logged_in()
	{
		return $this->ci->session->userdata('user_id') ? TRUE : FALSE;
	}

	function logout()
	{
		$this->ci->session->sess_destroy();
	}

	function get_user_id()
	{
		return $this->ci->session->userdata('user_id') == false ? 0 : $this->ci->session->userdata('user_id');
	}

}
