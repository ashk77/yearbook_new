<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\writeup;
use App\User;
use App\views;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     /*
    -------------------------------------------------------
    function index()
    -------------------------------------------------------
        This function returns home.blade.php files which is
        the dashboard
        
    */
        public function index()
        {
            $user = User::get();
            $roll = Auth::user()->rollno;
            $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();
            return view('home1',compact('user','notifications'));
        }



        public function search()
        {

            $name = request('search');
            $options = User::where('name',$name)->get();
            //dd(count($options));
            if(count($options)>1)
            {
                $user = User::get();
                $roll = Auth::user()->rollno;
                $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();

                return view('options',compact('notifications','user','options'));
            }
            else
            {
                if( $options->isNotEmpty()){
                    $roll = $options[0]['rollno']; 
                    return redirect("/yearbook/profile_index/".$roll);
                }
                else
                    return back()->with('Error','Sorry, we cannot find your friend in our database');
            }
        }





        /*
    -------------------------------------------------------
    function edit()
    -------------------------------------------------------
        This function returns edit the details of user
        
    */
        public function edit(Request $request)
        {

         $this->validate(request(),[

            'phone' => 'required|min:10|max:10',

        ]);
         $user = Auth::user();
         $user->email = request('email');
         $user->HOR = request('HOR');
         $user->course = request('course');
         $user->department = request('department');
         $user->phone = request('phone');
         $user->country = request('country');
         $user->city = request('city');
         $user->save();
         return back()->with('message','Details updated succesfully!');


     }
     public function showpassword()
     {
        $user = User::get();
        $roll = Auth::user()->rollno;
        $notifications = views::where('depmate',$roll)->where('read','1')->get()->toArray();

        return view('password',compact('user','notifications'));
     }
     public function editpassword(Request $request)
     {
        $user = Auth::user();
        $request->validate([
            'password'=>'required|confirmed|min:6',
            'password_confirmation'=>'required'
        ]);
        $user->password = bcrypt(request('password'));
        $user->save();
        return back()->with('message','Password changed succesfully!');
     }
 }

