<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bucket;
use App\views;
use App\User;
use App\Image;
use App\Poll;


class PollController extends Controller
{
    //
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    $roll = Auth::user()->rollno;
    $polls = Poll::where('rollno',$roll)->get()->toArray();
    if(!empty($polls))
      $polls = $polls[0];
    $user = User::get();


    $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();
    return view('polls',compact('polls','notifications','user'));

  }
  public function submit($id)
  {
   $roll = Auth::user()->rollno;
   if(empty(Poll::where('rollno',$roll)->get()->toArray())){

     Poll::create([

      'rollno' =>Auth::user()->rollno,
      'q'.$id => request('polls'.$id),

    ]);
   }
   else
   {
     Poll::where('rollno', $roll)
     ->update([

       'q'.$id => request('polls'.$id),
     ]);
   }
   return back();

 }
}
