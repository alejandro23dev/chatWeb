<?php

namespace App\Controllers;

use App\Models\AuthenticationModel;
use App\Models\MainModel;

class Home extends BaseController
{
	protected $objSession;
	protected $objRequest;

	protected $objAuthenticationModel;
	protected $objMainModel;

	public function __construct()
	{
		# Clear Session
		$this->objSession = session();
		$this->objSession->set('user', []);

		# Models
		$this->objAuthenticationModel = new AuthenticationModel;
		$this->objMainModel = new MainModel;

		# Services
		$this->objRequest = \Config\Services::request();
	}

	public function signup()
	{
		return view('authentication/signup');
	}

	public function login()
	{
		return view('authentication/login');
	}

	public function loginProccess()
	{
		$email = strtolower(htmlspecialchars(trim($this->objRequest->getPost('email'))));
		$password = htmlspecialchars(trim($this->objRequest->getPost('password')));

		$result = $this->objAuthenticationModel->login($email, $password);

		if ($result['error'] == 0) {
			$data = array();
			$data['lastSession'] = date('Y-m-d H:i:s');
			$this->objMainModel->objUpdate('user', $data, $result['data']->id);

			# Create Session
			$session = array();
			$session['userID'] = $result['data']->id;
			$session['user'] = $result['data']->user;
			$session['role'] = 'user';
			$session['email'] = $result['data']->email;

			$this->objSession->set('user', $session);
		}

		$response = array();
		$response['error'] = $result['error'];
		$response['msg'] = $result['msg'];

		return json_encode($response);
	}
}
