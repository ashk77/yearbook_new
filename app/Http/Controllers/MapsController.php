<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Maps;
use App\views;
use Auth;
class MapsController extends Controller
{
    public function index()
    {
    	$user = User::get();
         $roll = Auth::user()->rollno;
    	$locations = User::where('latitude','!=','')->where('longitude','!=','')->get();
        $notifications = views::where('depmate',$roll)->where('read','1')->get();
    	return view('maps',compact('user','locations','notifications'));
    }
    public function edit_location()
    {
    	$users = User::where('country','!=','')->where('city','!=','')->get();
    	return view('demo',compact('users'));

    }
     public function save_location(Request $request)
    {
    	$roll = request('rollno');
    	$user = User::where('rollno',$roll)->get();
    	$user = $user[0];

    	$user->latitude = request('latitude');
    	$user->longitude = request('longitude');
    	$user->save();
    	return back();
    }
   
}
