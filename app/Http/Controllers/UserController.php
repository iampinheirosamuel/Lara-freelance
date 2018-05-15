<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;
use App\User;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;

class UserController extends Controller {

    public function __construct() {
        // $this->middleware(['auth',  'clearance']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
        // $this->middleware(['auth', 'clearance'])->except('update');
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
    //Get all users and pass it to the view
    
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
    //Get all roles and pass it to the view
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
   //Validate name, email and password fields  
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|confirmed'
        ]);
                
                        $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
                    
                        $roles = $request['roles']; //Retrieving the roles field
                       //Checking if a role was selected
                        if (isset($roles)) {

                            foreach ($roles as $role) {
                            $role_r = Role::where('name', '=', $role)->firstOrFail();            
                            $user->assignRole($role_r); //Assigning role to user
                            }
                        }        
                    $user->fill($user)->save();

                    //Redirect to the users.index view and display message
                    return redirect()->route('/') ->with('flash_message', 'Welcome on board.');
                        
                
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id) {
        $user = User::findOrFail($id);
        return view('users.show')->with('users', $user); 
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id) {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles

        return view('users.edit', compact('user', 'roles')); //pass user and roles data to view

    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id) {
        $user = User::findOrFail($id); //Get role specified by id

    //Validate name, email and password fields  
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email',      
            'service'=>'required',
            'address'=>'required',            
            'state'=>'required',            
            'phone'=>'required|min:11',
            'about'=>'required|min:60',
            'image'=> 'required'
        ]);

       if ($request->input('image'))
                 {
                    $name = time().'.'.$request->input('image');
                    // $request->image->move('public/images',$name);


                    
                        $user->name = $request->input('name');
                        $user->email = $request->input('email');
                        $user->service = $request->input('service');
                        $user->phone = $request->input('phone');
                        $user->about = $request->input('about');
                        $user->address = $request->input('address');
                        $user->image = $name;
                        $user->save();
                        
                        
                        
                    
                }

        
         return view('/home')->with('flash_message', 'User successfully edited.');      
       
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id) {
    //Find a user with a given id and delete
        $user = User::findOrFail($id); 
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully deleted.');
    }
}
