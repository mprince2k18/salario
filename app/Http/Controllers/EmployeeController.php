<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Activation;
use App\Department;
use App\Designation;
use App\Gender;
use App\Employee;
use Carbon\Carbon;
use Alert;
use Image;


class EmployeeController extends Controller
{
    //BEGIN

    // register_employee
    function index()
    {
      $activations        =     Activation::all();
      $departments        =     Department::all();
      $designations       =     Designation::all();
      $genders            =     Gender::all();

      return view('dashboard.employee.register_employee',compact('activations','departments','designations','genders'));
    }

    // create_employee
    function create_employee(Request $request)
    {

        // validation

        $request->validate([
          'fname'                             => 'required',
          'lname'                             => 'required',
          'email'                             => 'required|unique:employees|email:rfc',
          'nid'                               => 'required|numeric|unique:employees',
          'dob'                               => 'required',
          'gender_id'                         => 'required',
          'blood'                             => 'required',
          'designation_id'                    => 'required',
          'joining_date'                      => 'required',
          'basic_salary'                      => 'required',
          'contact_number'                    => 'required|numeric',
          'team'                              => 'nullable',
          'status_id'                         => 'required',
          'photo'                             => 'required|mimes:jpeg,png',
        ],[
          // custom error message
          'fname.required'                    =>'First Name Is Required',
          'lname.required'                    =>'Last Name Is Required',
          'email.required'                    =>'Email Is Required',
          'nid.required'                      =>'NID Is Required',
          'dob.required'                      =>'Date Of Birth Is Required',
          'gender_id.required'                =>'Select Your Gender',
          'blood.required'                    =>'Select Your Blood Group',
          'designation_id.required'           =>'Choose Employee Designation',
          'joining_date.required'             =>'Select Employee Joining Date',
          'basic_salary.required'             =>'Basic Salary Is Required',
          'contact_number.required'           =>'Contact Number Is Required',
          'status_id.required'                =>'Choose Employee Status',
          'photo.required'                    =>'Please Upload Employee Photo',
        ]);


        // insert
        $last_inserted_id = Employee::insertGetId([
          'fname'           =>$request->fname,
          'lname'           =>$request->lname,
          'email'           =>$request->email,
          'nid'             =>$request->nid,
          'dob'             =>$request->dob,
          'gender_id'       =>$request->gender_id,
          'blood'           =>$request->blood,
          'designation_id'  =>$request->designation_id,
          'joining_date'    =>$request->joining_date,
          'basic_salary'    =>$request->basic_salary,
          'contact_number'  =>$request->contact_number,
          'team'            =>$request->team,
          'status_id'       =>$request->status_id,
          'photo'           =>$request->photo,
          'slug'            =>Str::slug($request->fname.'-'.$request->lname),
        ]);

        // photo

        if ($request->hasFile('photo')) {
        	$photo_upload     =  $request ->photo;
        	$photo_extension  =  $photo_upload -> getClientOriginalExtension();
        	$photo_name       =  $last_inserted_id . "." . $photo_extension;
        	Image::make($photo_upload)->resize(152,192)->save(base_path('public/uploads/employee/'.$photo_name),100);
        	Employee::find($last_inserted_id)->update([
        	'photo'          => $photo_name,
            ]);
          }


      Alert::toast('Employee Registered Successfully','success');
      return back();


    }




    //END
}
