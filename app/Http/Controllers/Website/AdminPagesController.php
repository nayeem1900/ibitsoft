<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

    public function index(){

        return view('admin.index');
    }

}
