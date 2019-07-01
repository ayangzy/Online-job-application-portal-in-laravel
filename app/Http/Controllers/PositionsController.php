<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Application;
use Session;
use Auth;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('applications.create');
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

        //get the user profile image
        $profileimage = Application::where('user_id', $user_id)->first();
        //get the selected position
        $position_applied = Application::where('user_id', $user_id)->first();

        $positions = Position::all();

        return view('applications.create')->with('positions', $positions)
                                            ->with('position_applied', $position_applied)
                                            ->with('profileimage', $profileimage);
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
        $this->validate($request,[
            'position' => 'required',
            
        ]);

            //check if position already exist then update

            $user_id = Auth::id();
            $app = Application::where('user_id', $user_id)->first();
         
         if($app){  
            $app->position = $request->position;
            $app->save();
             Session::flash('success', 'You have successfully updated your position');
             return redirect()->back();
         }else{

            //if position does not exist go ahead to create new position
                $applications = Application::create([
                'position' => $request->position,
                'user_id' => Auth::id()
            ]);
         }
        
        
        Session::flash('success', 'Position added successfully');
        return redirect()->route('applications.personal-details');
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
