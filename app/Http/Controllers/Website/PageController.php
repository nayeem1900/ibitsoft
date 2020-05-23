<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{



   /* public function index()
    {


        return view('website.index');
        //
    }*/

    public function messageprincipal()
    {


        return view('pages.comon');

    }


    //admission-info page

    public function admissioninfo()
    {




        return view('website.pages.admission-info');

    }
}
