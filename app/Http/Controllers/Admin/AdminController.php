<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Adminuser;

class AdminController extends Controller
{


    public function adminlogin(){


        return view('auth.admin.login');

    }




    public function loginsubmit(Request $request)
    {


        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required',

        ]);

        //find ueer by this email



//login this admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {


            ///login now
            return redirect()->intended(route('student.index'));


        }else {

            session()->flush('errors', 'InValid');
            //return redirect()->route('admin.login');
            return back();
        }
    }



    public function logout(Request $request)
    {

        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');

    }






}
