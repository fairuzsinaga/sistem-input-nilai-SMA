<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Login extends BaseController
{

	protected $loginModel;

	public function __construct()
	{
		$this->loginModel = new \App\Models\Users\loginModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Coba-Coba',
			'user' => $this->loginModel->getUsers()
		];

		// var_dump($data['user']);

		return view('Users/Coba', $data);
	}
}
