<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Ibit;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class IbitController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $ibits=Ibit::orderBy('id')->get();

        return view('ibit.index',compact('ibits'));
    }




    public function create(){


        return view('ibit.ibit_create');
    }


    public function save(Request $request){

        $this->validate($request,[
            'name'=>'required',

        ]);


        $ibit = new Ibit();
        $ibit->name = $request->name;




        $ibit->save();

        session()->flash('success','A new Brand added success');
        return redirect()->route('ibit.create');

    }





    public function edit($id)
    {

        $ibit=Ibit::find($id);
        if(!is_null($ibit)){
            return view('ibit.ibit_edit', compact('ibit'));

        }else{
            return redirect()->route('ibit.index');
        }

    }


    public function update(Request $request, $id){

        $this->validate($request,[
            'name'=>'required',


        ]);


        $ibit = Ibit::find($id);
        $ibit->name = $request->name;


        $ibit->save();

        session()->flash('success',' Brand update success');
        return redirect()->route('ibit.index');

    }



    public function delete($id)
    {
        $ibit =  Ibit::find($id);

        if(! is_null($ibit)){


            $depts=Department::where ('ibit_id', $ibit->id)->get();

            foreach ($depts as $dept){
                $dept->delete();
            }
            $ibit->delete();
        }

        session()->flash('success', ' Ibit has deleted Successfully');
        return back();
    }






}
