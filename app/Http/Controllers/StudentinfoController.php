<?php

namespace App\Http\Controllers;

use App\StudentAdmissioninfo;
use Illuminate\Http\Request;
use App\StudentImage;
use Image;




class StudentinfoController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function index()
    {

        $studentadmissions = StudentAdmissioninfo::orderBy('id')->get();

        return view('student.index', compact('studentadmissions'));

    }


    public function admission_crate()
    {


        return view('student.student-addmissionform');


    }


    public function admission_save(Request $request)
    {


        $request->validate([
            'name' => 'required|max:255',
            'f_name' => 'required',
            'm_name' => 'required',
            'email' => 'required',
            'result' => 'required|numeric',
            'ssc_year' => 'required',

        ]);


        $student = new StudentAdmissioninfo();
        $student->name = $request->name;
        $student->f_name = $request->f_name;
        $student->m_name = $request->m_name;
        $student->email = $request->email;
        $student->mobile_no = $request->mobile_no;
        $student->per_address = $request->per_address;
        $student->d_o_b = $request->d_o_b;
        $student->roll = $request->roll;
        $student->board = $request->board;
        $student->result = $request->result;
        $student->gender = $request->gender;
        $student->ibit_id = $request->ibit_id;
        $student->department_id = $request->department_id;
        $student->ssc_year = $request->ssc_year;

        $student->save();


        if (count($request->student_image) > 0) {
            foreach ($request->student_image as $image) {

                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/student/' . $img);

                Image::make($image)->save($location);
                $student_image = new StudentImage;
                $student_image->student_id = $student->id;
                $student_image->image = $img;
                $student_image->save();

            }
            session()->flash('success', 'A new Student added success');

            return redirect()->route('student.create');
        }


    }




    public function admission_edit($id)
    {

        $student=StudentAdmissioninfo::find($id);
        if(!is_null($student)){
            return view('student.student_edit', compact('student'));

        }else{
            return redirect()->route('student.index');
        }

    }



    public function admission_update(Request $request, $id){

        $this->validate($request,[
            'name'=>'required',


        ]);


        $student = StudentAdmissioninfo::find($id);
        $student->name = $request->name;
        $student->f_name = $request->f_name;
        $student->m_name = $request->m_name;

        $student->mobile_no = $request->mobile_no;
        $student->per_address = $request->per_address;
        $student->d_o_b = $request->d_o_b;
        $student->roll = $request->roll;

        $student->result = $request->result;


        $student->ssc_year = $request->ssc_year;


        $student->save();

        session()->flash('success',' Student update success');
        return redirect()->route('student.index');

    }



    public function admission_delete($id)
    {
        $student =  StudentAdmissioninfo::find($id);

        if(! is_null($student)){


            $student->delete();
        }

        session()->flash('success', 'Student has deleted Successfully');
        return back();
    }








    }
