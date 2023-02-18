<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function admin()
    {
        return view('admin-panel.admin');
    }



}
