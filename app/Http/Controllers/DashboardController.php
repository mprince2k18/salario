<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{

  // index
    function index()
    {
      return view('dashboard.mainpage.index');
    }


    // END
}
