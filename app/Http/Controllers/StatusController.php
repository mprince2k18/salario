<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Activation;
use Carbon\Carbon;
use Alert;


class StatusController extends Controller
{

    //BEGIN

    //activation
    function activation()
    {
      return view('dashboard.status.activation.activation');
    }

    //activation_create
    function activation_create(Request $request)
    {

      //validation
      $request->validate([
        'name'          =>    'required',       //name
      ]);


      Activation::insert([
        'name'          =>    $request->name,   //name
        'created_at'    =>    Carbon::now(),
      ]);

      Alert::toast($request->name . ' ' . 'Added Successfully','success');
      return back();

    }


    //END
}
