<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\Models\ChatsModel;

class Chats extends BaseController
{
	protected $objSession;
	protected $objRequest;

	protected $objMainModel;
	protected $objChatsModel;

	public function __construct()
	{
		# Session
		$this->objSession = session();

		# Models
		$this->objMainModel = new MainModel;
		$this->objChatsModel = new ChatsModel;

		# Services
		$this->objRequest = \Config\Services::request();
	}

	public function chatsList()
	{
		# Verify Session
		if (empty($this->objSession->get('user')) || empty($this->objSession->get('user')['userID'])) {
			return view('logout');
		}

		$data = array();
		$data['user'] = $this->objSession->get('user');
		$data['contacts'] = $this->objChatsModel->getContacts($data['user']['userID']);

		return view('chats/chatsList');
	}
}
