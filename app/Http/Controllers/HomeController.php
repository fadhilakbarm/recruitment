<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Keyword;
use App\Models\Medicine;
use App\Models\Info;
use App\Models\Tips;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
