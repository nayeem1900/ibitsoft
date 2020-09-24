<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Adminuser;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdminController extends Controller
{



    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm(){
        return view('auth.admin.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credential = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::guard('admin')->attempt($credential, $request->member)){
            return redirect()->intended(route('ibit.index'));
        }
        return redirect()->back()->withInput($request->only('email,remember'));
    }
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect('/');
    }












  /* public function adminlogin(){


        return view('auth.admin.login',[
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }




    private function validator(Request $request)
    {

        $rules = [
            'email'    => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }



    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }





    public function login(Request $request)
    {



        $this->validator($request);

        if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('student.index'));
                //->with('status','You are Logged in as Admin!');
        }

        //Authentication failed...
        return $this->loginFailed();
    }




    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->with('status','Admin has been logged out!');
    }

*/


}
