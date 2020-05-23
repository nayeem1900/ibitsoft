<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addmission_form(){


        return view('student.addmission_form');
    }
}
