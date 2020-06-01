<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){


        return view('admin_page.index');
    }
}
