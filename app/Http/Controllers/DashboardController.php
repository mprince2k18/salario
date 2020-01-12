<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{

  // middleware

    public function __construct()
    {
        $this->middleware('auth');
    }

  // index
    function index()
    {
      return view('dashboard.mainpage.index');
    }


    // END
}
