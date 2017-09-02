<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use JonnyW\PhantomJs\Client;

class Phantom {

	var $client;

	function __construct()
	{
		$this->ci =& get_instance();
		$this->client = Client::getInstance();
		$this->client->getEngine()->setPath(FCPATH . 'bin' . DIRECTORY_SEPARATOR . 'phantomjs.exe');
	}

	function send_get_request($url = FALSE)
	{
		if ($url) {
			$request = $this->client->getMessageFactory()->createRequest($url, 'GET');
    	$response = $this->client->getMessageFactory()->createResponse();

    	$this->client->send($request, $response);
			return Array(
				'code' => $response->getStatus(),
				'content' => $response->getContent(),
				'contentType' => $response->getContent()
			);
		}

		return $url;
	}

}
