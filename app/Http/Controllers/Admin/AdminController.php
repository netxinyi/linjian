<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller {



	public function showLogin()
	{
		return view('admin.login');
	}
	public function showIndex()
	{

		return view('admin.index');
	}

}


