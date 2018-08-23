<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $profile = User::findOrFail($id)->profile; //Find profile of user with id = $id

        return view('profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = User::findOrFail($id)->profile; //Find a profile based on a user

        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'service' => 'required',
            'image' => 'required|image'
        ]);

        $profile = Profile::find($id);

        if($request->hasFile('image')){
           
            $image = $request->image;

            $image_new_name = time().$image->getClientOriginalName();

            $image->move('uploads/userprofile/', $image_new_name);

            $profile->name = $request->name;

            $profile->about = $request->about;

            $profile->phone = $request->phone;

            $profile->address = $request->address;
            
            $profile->state = $request->state;
            
            $profile->service = $request->service;
            

            $profile->image = '/uploads/userprofile/'.$image_new_name; 
               
            $profile->save();

            Session::flash('success','You have successfully updated your profile');

            return redirect()->back();
                
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
