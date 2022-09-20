<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('dashboard');
	}

	public function pemakaian()
	{
		// return view('v_info');
		echo "data pemakaian";
	}

	public function user()
	{
		return view('v_index');
		// echo "tambah bahan";
	}

	public function info()
	{
		return view('v_info');
	}
}
