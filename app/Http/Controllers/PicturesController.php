<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use Auth;
use Session;

class PicturesController extends Controller
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

        $app = Application::where('user_id', $user_id)->pluck('phone','contact','state','lga')->first();

        if($app ==NULL){
            Session::flash('warning', 'Access denied for this page, compete your personal details');
            return redirect()->back();
        }

        $app = Application::where('user_id', $user_id)->pluck('identification_type', 'identification_number')->first();

        if($app ==NULL){
            Session::flash('warning', 'Access denied for this page, select your means of identification');
            return redirect()->back();
        }
                                                                

        


        $profileimage = Application::where('user_id', $user_id)->first();
        
        return view('pictures.create')->with('profileimage', $profileimage);

        
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
            'profile_picture' => 'required',
        ]);

        $user_id = Auth::id();

        $app = Application::where('user_id', $user_id)->first();
        
        if($request->hasfile('profile_picture')){
            $featured = $request->profile_picture;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/profiles', $featured_new_name);
            $app->profile_picture = 'uploads/profiles/' .$featured_new_name;
            
             $app->save();
        }
       
      

       Session::flash('success', 'Profile image successfully uploaded');
       return redirect()->route('educationals.create');

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
