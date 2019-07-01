<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Application;
use App\State;
use App\Lga;
use Auth;
use Session;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        //$user = $users->id;
       //$users = Auth()->user();

       $user_id = Auth::id();

       //$position = Application::all();

       //get all the states
        $states = State::all();

        //get all the local government
        $lgas = Lga::all();

       $position = Application::where('user_id', $user_id)->first();

       //get user profile picture

       $profileimage = Application::where('user_id', $user_id)->first();

       //get the selected personal details for validation
       //$user_validation = Appplication::where('user_id', $user_id)->first();


       if($position ==NULL){
        Session::flash('warning', 'You do not have permission to access this page, please select position to procceed');
        return redirect()->back();
       }
    
        return view('applications.personal-details')->with('user', $user)
                                                    ->with('position', $position)
                                                    ->with('states', $states)
                                                    ->with('lgas', $lgas)
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
            'phone' => 'required',
            'contact' => 'required',
            'state' => 'required',
            'lga' => 'required',
        ]);

        //$user = Auth()->user();
        $users = Auth::id();
        
        //$user = $users->id;
        $applications = Application::where('user_id', $users)->first();

        $applications->phone = $request->phone;
        $applications->contact = $request->contact;
        $applications->state = $request->state;
        $applications->lga = $request->lga;


        $applications->save();

        Session::flash('success', 'personal details successfully saved');

        return redirect()->route('identifications.identification');

        


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
