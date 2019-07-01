<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use Auth;
use Session;

class SummarysController extends Controller
{
    //
    public function index()

    {


         //
         $user_id = Auth::id();
         $userdetails = Application::where('user_id', $user_id)->first();
 
         $profileimage = Application::where('user_id', $user_id)->first();
         return view('summaries.summary')->with('profileimage', $profileimage)
                                             ->with('userdetails', $userdetails);
    }

    public function update(request $request)

    {


        return redirect()->back();
    }
}
