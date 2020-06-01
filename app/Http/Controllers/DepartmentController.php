<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $depts=Department::orderBy('id')->get();

        return view('department.index',compact('depts'));
    }





    public function create(){


        return view('department.dept_create');
    }


    public function save(Request $request){

        $this->validate($request,[
            'name'=>'required',

        ]);


        $dept = new Department();
        $dept->name = $request->name;




        $dept->save();

        session()->flash('success','A new Brand added success');
        return redirect()->route('department.create');

    }





    public function edit($id)
    {

        $dept=Department::find($id);
        if(!is_null($dept)){
            return view('department.dept_edit', compact('dept'));

        }else{
            return redirect()->route('ibit.index');
        }

    }


    public function update(Request $request, $id){

        $this->validate($request,[
            'name'=>'required',


        ]);


        $dept = Department::find($id);
        $dept->name = $request->name;


        $dept->save();

        session()->flash('success',' Brand update success');
        return redirect()->route('department.index');

    }



    public function delete($id)
    {
        $dept =  Department::find($id);

        if(! is_null($dept)){


            $dept>delete();
        }

        session()->flash('success', 'Department has deleted Successfully');
        return back();
    }




}
