<?php


namespace App\Controllers;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");


class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'DGarage',
			// 'content' => 'login/login.php'
		];

		return view('login/login', $data);
	}
}
