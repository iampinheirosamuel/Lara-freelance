<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Profile;
use App\Post;
use Illuminate\Http\Request;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ProfileController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard($id)
    {
        //
        $profile = User::findOrFail($id)->profile; //Find profile of user with id = $id
        $posts = Post::orderby('id', 'desc')->paginate(5);
        return view('profile.index')->with('profile', $profile)->with('posts', $posts);

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
        $roles = Role::get();
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
            'service' => 'required'
        ]);

            $profile = Profile::find($id);
            
            $profile->name = $request->name;

            $profile->about = $request->about;

            $profile->phone = $request->phone;

            $profile->address = $request->address;
            
            $profile->state = $request->state;
            
            $profile->service = $request->service;
            
            if($request->role != 'Active'){
               $profile->user->assignRole('Active');
            }
            
               
            $profile->save();            

            Session::flash('success','You have successfully updated your profile');

            return redirect()->back();
                
            
    }

    public function changeProfileImage(Request $request,Profile $profile, $id){
          
        $this->validate($request, [
            'image' => 'required|image'
        ]);

         $profile = Profile::find($id);

        if($request->hasFile('image')){
           
            $image = $request->image;

            $image_new_name = time().$image->getClientOriginalName();

            $image->move('uploads/userprofile/', $image_new_name);


            $profile->image = '/uploads/userprofile/'.$image_new_name; 
               
            $profile->save();
            
        }

            Session::flash('success','You have successfully updated your profile image');

            return redirect()->back();

    }

      public function changeCoverImage(Request $request,Profile $profile, $id){
          
        $this->validate($request, [
            'coverImage' => 'required|image'
        ]);

         $profile = Profile::find($id);

        if($request->hasFile('coverImage')){
           
            $image = $request->coverImage;

            $image_new_name = time().$image->getClientOriginalName();

            $image->move('uploads/usercover/', $image_new_name);


            $profile->coverImage = '/uploads/usercover/'.$image_new_name; 
               
            $profile->save();
            
        }

            Session::flash('success','You have successfully updated your profile  cover image');

            return redirect()->back();

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
