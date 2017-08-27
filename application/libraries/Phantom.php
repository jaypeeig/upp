<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use JonnyW\PhantomJs\Client;

class Phantom {

	var $client;
	
	function __construct()
	{
		$this->ci =& get_instance();
		require_once 'vendor/autoload.php';
		$this->client = Client::getInstance();
		$this->client->getEngine()->setPath(FCPATH . 'bin' . DIRECTORY_SEPARATOR . 'phantomjs.exe');
	}
	
	function init() 
	{
		$request = $this->client->getMessageFactory()->createRequest('https://www.facebook.com/', 'GET');
		$response = $this->client->getMessageFactory()->createResponse();
		$this->client->send($request, $response);
	    
	    if($response->getStatus() === 200) {
	        return $response->getContent();
	    }

	    return $response->getStatus();
	}
}