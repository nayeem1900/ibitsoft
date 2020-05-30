<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */




    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


   /* public function __construct()
    {

        // $this->middleware('guest')->except('logout');

        $this->middleware('guest:admin')->except('logout');
    }*/

    public function showLoginForm()
    {
       return view('auth.admin.login');

    }


    public function login(Request $request)
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
