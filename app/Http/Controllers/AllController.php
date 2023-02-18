<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{


    public function where(){
        return view('info.where-to-find-us');
    }

    public function main(){
        return view('main');
    }
}
