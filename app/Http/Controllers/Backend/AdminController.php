<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('backend.dashboard');
    }


    public function status()
    {
    	return view('backend.status');
    }
}
