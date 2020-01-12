<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Activation;
use App\Designation;
use App\Department;
use App\Gender;
use Carbon\Carbon;
use Alert;


class StatusController extends Controller
{

    //BEGIN

    // BEGIN: Activation

// ------------------------------------------------------------------------------------------------------------

    //activation
    function activation()
    {
      $activations = Activation::all();
      return view('dashboard.status.activation.activation',compact('activations'));
    }

    //activation_create
    function activation_create(Request $request)
    {

      //validation
      $request->validate([
        'name'          =>    'required',       //name
      ],
      [
        'name.required' => 'Activation value is required'
      ]);


      Activation::insert([
        'name'          =>    $request->name,   //name
        'slug'          =>    Str::slug($request->name),   //name
        'created_at'    =>    Carbon::now(),
      ]);

      Alert::toast($request->name . ' ' . 'Added Successfully','success');
      return back();

    }


    // activation_delete

    function activation_delete($activation_id)
    {
      Activation::findOrFail($activation_id)->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }


    // activation_delete

    function activation_multi_delete(Request $request)
    {
      Activation::query()->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }


    // activation_edit

    function activation_edit($activation_id)
    {
      $edit_activation = Activation::findOrFail($activation_id);
      return view('dashboard.status.activation.activation_edit',compact('edit_activation'));
    }


    // activation_update

    function activation_update(Request $request, $activation_id)
    {
      Activation::findOrFail($activation_id)->update([
        'name'          =>    $request->name,               //name
        'slug'          =>    Str::slug($request->name),   //slug
      ]);

      Alert::toast('Updated Successfully','success');
      return back();

    }


    // END: Activation

// ------------------------------------------------------------------------------------------------------------

    // BEGIN: Designation

    // designation

    function designation()
    {
      $designations = Designation::all();
      return view('dashboard.status.designation.designation',compact('designations'));
    }

    // designation_create

    function designation_create(Request $request)
    {
      //validation
      $request->validate([
        'name'          =>    'required',       //name
      ],
      [
        'name.required' => 'Designation value is required'
      ]);


      Designation::insert([
        'name'          =>    $request->name,   //name
        'slug'          =>    Str::slug($request->name),   //name
        'created_at'    =>    Carbon::now(),
      ]);

      Alert::toast($request->name . ' ' . 'Added Successfully','success');
      return back();
    }

    // designation_delete

    function designation_delete($designation_id)
    {
      Designation::findOrFail($designation_id)->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }

    // designation_edit

    function designation_edit($designation_id)
    {
      $edit_designation = Designation::findOrFail($designation_id);
      return view('dashboard.status.designation.designation_edit',compact('edit_designation'));
    }

    // designation_update

    function designation_update(Request $request, $designation_id)
    {
      Designation::findOrFail($designation_id)->update([
        'name'          =>    $request->name,               //name
        'slug'          =>    Str::slug($request->name),   //slug

      ]);

      Alert::toast('Updated Successfully','success');
      return back();

    }

    // designation_multi_delete

    function designation_multi_delete(Request $request)
    {
      Designation::query()->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }

    // END: Designation

// ------------------------------------------------------------------------------------------------------------

    // BEGIN: Department

    // designation

    function department()
    {
      $departments = Department::all();
      return view('dashboard.status.department.department',compact('departments'));
    }

    // department_create

    function department_create(Request $request)
    {
      //validation
      $request->validate([
        'name'          =>    'required',       //name
      ],
      [
        'name.required' => 'Department value is required'
      ]);


      Department::insert([
        'name'          =>    $request->name,   //name
        'slug'          =>    Str::slug($request->name),   //name
        'created_at'    =>    Carbon::now(),
      ]);

      Alert::toast($request->name . ' ' . 'Added Successfully','success');
      return back();
    }

    // department_delete

    function department_delete($department_id)
    {
      Department::findOrFail($department_id)->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }

    // department_edit

    function department_edit($department_id)
    {
      $edit_department = Department::findOrFail($department_id);
      return view('dashboard.status.department.department_edit',compact('edit_department'));
    }

    // department_update

    function department_update(Request $request, $department_id)
    {
      Department::findOrFail($department_id)->update([
        'name'          =>    $request->name,               //name
        'slug'          =>    Str::slug($request->name),   //slug

      ]);

      Alert::toast('Updated Successfully','success');
      return back();

    }

    // department_id_multi_delete

    function department_id_multi_delete(Request $request)
    {
      Department::query()->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }

    // END: Department

// ------------------------------------------------------------------------------------------------------------


    // BEGIN: Gender

    // gender

    function gender()
    {
      $genders = Gender::all();
      return view('dashboard.status.gender.gender',compact('genders'));
    }

    // gender_create

    function gender_create(Request $request)
    {
      //validation
      $request->validate([
        'name'          =>    'required',       //name
      ],
      [
        'name.required' => 'Department value is required'
      ]);


      Gender::insert([
        'name'          =>    $request->name,   //name
        'slug'          =>    Str::slug($request->name),   //name
        'created_at'    =>    Carbon::now(),
      ]);

      Alert::toast($request->name . ' ' . 'Added Successfully','success');
      return back();
    }
    //
    // gender_delete

    function gender_delete($gender_id)
    {
      Gender::findOrFail($gender_id)->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }

    // gender_edit

    function gender_edit($gender_id)
    {
      $edit_gender = Gender::findOrFail($gender_id);
      return view('dashboard.status.gender.gender_edit',compact('edit_gender'));
    }

    // department_update

    function gender_update(Request $request, $gender_id)
    {
      Gender::findOrFail($gender_id)->update([
        'name'          =>    $request->name,               //name
        'slug'          =>    Str::slug($request->name),   //slug
      ]);

      Alert::toast('Updated Successfully','success');
      return back();

    }

    // gender_id_multi_delete

    function gender_id_multi_delete(Request $request)
    {
      Gender::query()->delete();

      Alert::toast('Deleted Successfully','danger');
      return back();
    }

    // END: Gender

// ------------------------------------------------------------------------------------------------------------




    //END
}
