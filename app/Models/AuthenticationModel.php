<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthenticationModel extends Model
{
	protected $db;

	function  __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
	}

	public function login($email, $password)
	{
		$query = $this->db->table('user')
			->where('email', $email)
			->where('deleted', 0);

		$data = $query->get()->getResult();
		$result = array();

		if (empty($data)) {
			$result = array();
			$result['error'] = 1;
			$result['msg'] = 'EMAIL_NOT_FOUND';

			return $result;
		}

		if (password_verify($password, $data[0]->password)) {
			$result = array();
			$result['error'] = 0;
			$result['msg'] = 'SUCCESS';
			$result['data'] = $data[0];

			return $result;
		} else {
			$result = array();
			$result['error'] = 1;
			$result['msg'] = 'INVALID_PASSWORD';

			return $result;
		}
	}
}
