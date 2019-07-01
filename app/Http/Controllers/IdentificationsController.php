<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use Session;

use Auth;
use App\Position;

class IdentificationsController extends Controller
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

       //get user profile image
       $profileimage = Application::where('user_id', $user_id)->first();
      

       $app = Application::where('user_id', $user_id)->first();
       if($app ==NULL){
           Session::flash('warning', 'You do not have permission to access this page untill you select position applying for');
           return redirect()->back();
       }

       $app2 = Application::where('user_id', $user_id)->pluck('state','phone', 'contact', 'lga')->first();

       if($app2 ==NULL){
           Session::flash('warning', 'You are not allowed to this page untill your personal details is completed');
           return redirect()->back();
       }

       
       
        return view('identifications.identification')->with('app', $app)
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
            'identification_type' => 'required',
            'identification_number' => 'required',
            
        ]);

        
       $user_id = Auth::id();

       $app = Application::where('user_id', $user_id)->first();
      
        $app->identification_type = $request->identification_type;
        $app->identification_number = $request->identification_number;
        
        $app->save();
        Session::flash('success', 'mode of identification saved');

        return redirect()->route('pictures.image');
  
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
