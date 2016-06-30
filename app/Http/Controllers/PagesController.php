<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
  public function getAbout()
  {
    $first = 'Taylor';
    $last = 'Osborn';
    $skills = ['PHP', 'HTML', 'CSS', 'JavaScript', 'CakePHP'];

    return view('pages.about', ['first' => $first, 'last' => $last, 'skills' => $skills]);
  }

}
