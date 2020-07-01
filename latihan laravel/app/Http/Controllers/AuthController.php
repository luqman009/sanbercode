<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
    	return view('form');
    }

    public function biodata()
    {
    	return view('welcome');
    }

    public function biodata_post(Request $request)
    {
    	// dd($request->all());
    	$nama = $request['first'].$request['last'];
    	return view('welcome', ["nama" => $nama]);
    }
}
