<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\likes;
use App\Image;
use App\Bucket;
use DB;

class LikesController extends Controller
{
    //
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function load()
  {


    $mydata = likes::where('pic_id',request('pic_id'))
    ->where('user_id',Auth::user()->id)->get();
    $content="";
    $i=0;

    foreach($mydata as $view)   
    {   
      $i=1;
    }
    if($i==0)
      $content="<button type='button'  style='width: 100%;' class='btn btn-success approve app'>LIKE</button>";
    else if ($i==1)
      $content="<button type='button' style='width: 100%;' class='btn btn-danger disapprove app' onclick>UNLIKE</button>";


    return response($content, 200);  	


  }

  public function like()
  {



    $mydata = likes::where('pic_id',request('pic_id'))
    ->where('user_id',Auth::user()->id)->get();
    $content="";
    $i=0;

    foreach($mydata as $view)   
    {   
      $i=1;
      $alum=likes::find($view['id']);

      $alum->delete(); 
    }
    if($i==1)
    {

  //will decrease totalcount by -1
      Image::where('id',request('pic_id'))->increment('totalcount', -1);

      $content="<button type='button' class='btn btn-success approve app'>LIKE</button>";

    }
    else if ($i==0)
    {
      likes::create([
        'pic_id' => request('pic_id'),

        'user_id' => Auth::user()->id,
      ]);

//will increase total count by 1 whenever like button clicked
      Image::where('id',request('pic_id'))->increment('totalcount', 1);



      $content="<button type='button' class='btn btn-danger disapprove app' onclick>UNLIKE</button>";
    }


    return response($content, 200);  	


  }
  public function bucket_load()
  {
   

    $mydata = likes::where('pic_id',request('pic_id'))
    ->where('user_id',Auth::user()->id)->get();
    $content="";
    $i=0;

    foreach($mydata as $view)   
    {   
      $i=1;
    }
    if($i==0)
      $content="<button type='button'  style='width: 100%;' class='btn btn-success approve app'>LIKE</button>";
    else if ($i==1)
      $content="<button type='button' style='width: 100%;' class='btn btn-danger disapprove app' onclick>UNLIKE</button>";
    

    return response($content, 200);   
    

  }

  public function bucket_like()
  {
   


    $mydata = likes::where('pic_id',request('pic_id'))
    ->where('user_id',Auth::user()->id)->get();
    $content="";
    $i=0;

    foreach($mydata as $view)   
    {   
      $i=1;
      $alum=likes::find($view['id']);

      $alum->delete(); 
    }
    if($i==1)
    {

  //will decrease totalcount by -1
      Bucket::where('id',request('pic_id'))->increment('totalcount', -1);

      $content="<button type='button' class='btn btn-success approve app'>LIKE</button>";

    }
    else if ($i==0)
    {
      likes::create([
        'pic_id' => request('pic_id'),
        
        'user_id' => Auth::user()->id,
      ]);

//will increase total count by 1 whenever like button clicked
      Bucket::where('id',request('pic_id'))->increment('totalcount', 1);



      $content="<button type='button' class='btn btn-danger disapprove app' onclick>UNLIKE</button>";
    }


    return response($content, 200);   
    

  }
}
