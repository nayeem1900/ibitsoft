<?php

namespace App\Http\Controllers;

use App\Studentadmission;
use App\StudentImage;
use App\StudentInfo;
use Illuminate\Http\Request;
use App\Ibit;
use App\Department;
use Illuminate\Database;

use Image;

class StudentController extends Controller
{


/*    public function index()
   {

        $studentadmissions = Studentadmission::orderBy('id')->get();

        return view('student.index', compact('studentadmissions'));

    }*/


    public function addmissionform(){


        return view('student.student_create');
    }






    public function saveadmission(Request $request)
    {



        $student = new StudentInfo();
        $student->name = $request->name;
        $student->f_name = $request->f_name;
        $student->m_name = $request->m_name;
        $student->email = $request->email;

        $student->gender = $request->gender;


        $student->save();


        if (count($request->student_image) > 0) {
            foreach ($request->student_image as $image) {

                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/student/' . $img);

                Image::make($image)->save($location);
                $student_image = new StudentImage();
                $student_image->student_id = $student->id;
                $student_image->image = $img;
                $student_image->save();

            }
            session()->flash('success', 'A new Brand added success');
            return redirect()->route('student.create');
        }











        /*  $request->validate([
              'name' => 'required|max:255',
              'father_name' => 'required',
              'mother_name' => 'required',
              'mobile_no' => 'required|numeric',
              'sscexam' => 'required',
              'result' => 'required',
              'email' => 'required',



          ]);

          $student = new Studentadmission();
          $student->name = $request->name;
          $student->f_name = $request->f_name;
          $student->m_name = $request->m_name;
          $student->email = $request->email;
          $student->mobile_no = $request->mobile_no;
          $student->nid = $request->nid;
          $student->ssc_year = $request->ssc_year;
          $student->result = $request->result;
          $student->gender = $request->gender;
          $student->per_address = $request->per_address;


          $student->d_o_b = $request->d_o_b;

          $student->save();

          if (count($request->student_image) > 0) {
              foreach ($request->student_image as $image) {

                  $img = time() . '.' . $image->getClientOriginalExtension();
                  $location = public_path('images/student/' . $img);

                  Image::make($image)->save($location);
                  $student_image = new StudentImage();
                  $student_image->student_id = $student->id;
                  $student_image->image = $img;
                  $student_image->save();

              }
              session()->flash('success', 'A new Brand added success');
              return view('student.create');
          }*/


    }





}
