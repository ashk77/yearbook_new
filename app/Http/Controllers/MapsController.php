<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class MapsController extends Controller
{
    public function index()
    {
    	$users = User::get();
    	return view('maps');
    }
}
