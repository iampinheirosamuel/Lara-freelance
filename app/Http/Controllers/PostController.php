<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\Post;
use Auth;
use Session;
use App\User;

class PostController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('index','home','show','create','store','edit','destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        $profile = Profile::all();
        $users = User::all();
        return view('index' , compact('users'));
    }

    public function showUser($id) {
        $user = User::findOrFail($id);
        return view('users.show')->with('users', $user); 
    }

    // public function updateUser (Request $request, $id){
    //       $user = User::findOrFail($id);
    //       return view('users.update')->with('user', $user);
    // }

    // public function updateUserRequest(Request $request, $id) {
    //     $user = User::findOrFail($id); //Get user specified by id

    // //Validate name, email and password fields  
    //     $this->validate($request, [
    //         'name'=>'required|max:120',
    //         'email'=>'required|email|unique:users,email,'.$id,
    //         'password'=>'required|min:6|confirmed',
    //         'service'=>'required',
    //         'address'=>'required',            
    //         'state'=>'required',            
    //         'phone'=>'required|min:11',
    //         'about'=>'required|min:60',
    //         'image'=> 'required'
    //     ]);

        		
	// 		if($request->input('image'))
    //              {
                            
    //                 $image = $request->input('image');
    //                 $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
    //                 \Image::make($request->input('image'))->save(public_path('image').$name);		
    //                 $input->image = 'image'.$name;
    //                 $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
    //                 $user->fill($input)->save();

    //                 return redirect()->route('users.index') ->with('flash_message', 'User successfully edited.');
                        
    //             }

        

        
    //         }
    

    public function index() {
        $posts = Post::orderby('id', 'desc')->paginate(15); //show only 15 items at a time in descending order
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $profile = Profile::all();
         $posts = Post::orderby('id', 'desc')->paginate(10);
         return view('posts.create', compact('profile','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 

    //Validating title and body field
        $this->validate($request, [
           
        'title' => 'required|max:255',
        'featured' => 'required|image',
        'body' => 'required'
        
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts',$featured_new_name);

        $post = Post::create([
         

            'title' => $request->title,

            'profile_id' => $request->profile_id,

            'body' => $request->body,

            'featured' => '/uploads/posts/'.$featured_new_name,

        ]);

    //Display a successful message upon save
        return redirect()->route('posts.index')
            ->with('flash_message', 'Article,
             '. $post->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
         $post = Post::findOrFail($id); //Find post of id = $id
         $profile = Profile::all();
         $posts = Post::orderby('id', 'desc')->paginate(10);
        return view ('posts.show', compact('post','profile','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
            
        ]);

        $post = Post::find($id);

        if($request->hasFile('featured')){
           
            $featured = $request->featured;

            $featured_new_name = time().$featured->getCientOriginalName();

            $featured = move('uploads/posts/', $featured_new_name);

            $post->title = $request->title;

            $post->body = $request->body;
               
            $post->save();
        }

        return redirect()->route('posts.show', 
            $post->id)->with('flash_message', 
            'Article, '. $post->title.' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('flash_message',
             'Article successfully deleted');

    }
}