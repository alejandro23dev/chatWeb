<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatsModel extends Model
{
	protected $db;

	function  __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
	}

	public function getContacts($logUserID)
	{
		$query = $this->db->table('user')
			->where('id!=', $logUserID);

		return $query->get()->getResult();
	}

	public function getContact($contactID)
	{
		$query = $this->db->table('user')
			->where('id', $contactID);

		return $query->get()->getResult();
	}
}
