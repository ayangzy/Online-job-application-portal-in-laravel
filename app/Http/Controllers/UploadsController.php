<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;
use Session;

class UploadsController extends Controller
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

         $profileimage = Application::where('user_id', $user_id)->first();
        return view('uploads.create')->with('profileimage',$profileimage);
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
            'upload_ssce' => 'required',
            //'upload_nysc' => 'required',
            //'upload_degree' => 'required',

        ]);

        $user_id = Auth::id();

        $app = Application::where('user_id', $user_id)->first();
        if($request->hasfile('upload_ssce')){

            $featured->upload_ssce = $request->upload_ssce;
            //$featured->upload_nysc = $request->upload_nysc;
            //$featured->upload_degree = $request->upload_degree;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/profiles', $featured_new_name);
            $app->upload_ssce = 'uploads/profiles/' .$featured_new_name;
            //$app->upload_nysc = 'uploads/profiles/' .$featured_new_name;
            //$app->upload_degree = 'uploads/profiles/' .$featured_new_name;
        }


        

        $app->save();

        Session::flash('success', 'Your uploads is successfull');

        return redirect()->back();
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
