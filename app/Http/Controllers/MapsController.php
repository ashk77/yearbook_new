<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class MapsController extends Controller
{
    public function index()
    {
    	$users = User::get();
    	$locations = $locations = User::where('country','>','0')->where('city','>','0')->get();
    	return view('maps',compact('locations'));
    }
}
