<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{



   public function index()
    {


        return view('index');

    }

    public function messageprincipal(){


        return view('website.pages.comon');

    }

    //admission-info page

    public function admissioninfo()
    {




        return view('website.pages.admission-info');

    }


    public function aboutus()
    {


        return view('website.pages.aboutus');

    }


public function gallery(){


        return view('website.pages.gallery');


}

    public function contact(){


        return view('website.pages.contact');


    }



}
