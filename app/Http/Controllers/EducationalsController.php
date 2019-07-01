<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;
use Session;

class EducationalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_id = Auth::id();
        


        

         $profile = Application::where('user_id', $user_id)->pluck('profile_picture')->first();
         if($profile ==NULL){
            Session::flash('warning', 'You need to upload your profile picture');
            return redirect()->back();
        }

         $user = Application::where('user_id', $user_id)->first();

        $profileimage = Application::where('user_id', $user_id)->first();
        return view('educationals.create')->with('profileimage', $profileimage)
                                        ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request,[

            'nysc_year' => 'required',
            'nysc_number' => 'required',
            'secondary' => 'required',
            'secondary_year' => 'required',
            'tertiary' => 'required',
            'tertiary_year' => 'required'
        ]);


        $user_id = Auth::id();

        $app = Application::where('user_id', $user_id)->first();

        $app->nysc_year = $request->nysc_year;
        $app->nysc_number = $request->nysc_number;
        $app->secondary = $request->secondary;
        $app->secondary_year = $request->secondary_year;
        $app->tertiary = $request->tertiary;
        $app->tertiary_year = $request->tertiary_year;

        $app->save();

        Session::flash('success', 'Record successfully saved');
        return redirect()->route('uploads.create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
