<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class RapatController extends Controller
{
   public function index()
   {
   		$response = Curl::to('https://rapat.pdam-sby.go.id/test/daftar-rapat')		        	
			        ->asJson()
			        ->get();		        	

        return view('rapat.index', compact('response'));
   }
}
