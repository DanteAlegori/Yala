<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{

public function about(){

return view('info.about-us');

}

public function where(){

return view('info.where-to-find-us');

}

public function catalog(){

return view('catalog.catalog');

}

public function item(){

return view('catalog.item');

}





}