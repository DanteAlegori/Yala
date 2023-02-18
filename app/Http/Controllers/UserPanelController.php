<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function user(){
        if(auth()->user()->login == 'admin'){
            return view('admin-panel.admin');
        }

         return view('user-panel.user');

    }
}
