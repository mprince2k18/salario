<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

  // index
    function index()
    {
      return view('dashboard.mainpage.index');
    }


    // END
}
