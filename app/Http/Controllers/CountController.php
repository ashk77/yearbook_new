<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\likes;

use App\Comment;

use App\Image;

use App\User;

use App\views;



use DB;

class CountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $images = Image::get();
        $currenttime = \Carbon\Carbon::now();
        foreach ($images as $image) {
            $image['finalcount'] = $image['totalcount'] - 1.5*($image['created_at']->diffInDays($currenttime));
            $image->save();
        }
		//to select 50 images and show them in 10 per page
        $images=Image::orderBy('finalcount','DESC')->take(50)->paginate(5);

        //$images = $image->sortBy('totalcount');
        //dd($images);
        $currentpage=$images->currentPage();
        $perpage=$images->perPage();

        $user = User::get();
        $roll = Auth::user()->rollno;
        $notifications = views::where('depmate',$roll)->where('read','1')->get();

        return view('trending1',compact('images','user','notifications','currentpage','perpage'));
    }
   
   /* public function entry()
    {
    	$users = User::get();
    	
    	for ($var=1500; $var < 1800; $var++) { 
    		$users[$var]->password = bcrypt($users[$var]->dob);
    		$users[$var]->save();
    	}
    	return redirect('/');
    }
    public function entry1()
    {
    	$users = User::get();
    	
    	for ($var=1800; $var < 2100; $var++) { 
    		$users[$var]->password = bcrypt($users[$var]->dob);
    		$users[$var]->save();
    	}
    	return redirect('/');
    }
    public function entry2()
    {
    	$users = User::get();
    	
    	for ($var=2100; $var < 2400; $var++) { 
    		$users[$var]->password = bcrypt($users[$var]->dob);
    		$users[$var]->save();
    	}
    	return redirect('/');
    }
    public function entry3()
    {
    	$users = User::get();
    	
    	for ($var=2400; $var < 2700; $var++) { 
    		$users[$var]->password = bcrypt($users[$var]->dob);
    		$users[$var]->save();
    	}
    	return redirect('/');
    }*/
    
}
