<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function coba()
	{
		# code...
		echo "Hello World! $this->nama";
	}
}
