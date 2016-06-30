<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HelloController extends Controller {

	//
	public function index()
	{
		$title = 'Title';
		$subtitle = 'subtitle';

		return view('hello.index', ['title' => $title, 'subtitle' => $subtitle]);
	}

}
