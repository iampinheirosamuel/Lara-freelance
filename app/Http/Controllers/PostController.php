<?php
// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\Post;
use Auth;
use Session;
use App\User;
use App\Like;
use App\Setting;

class PostController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('index','home','show','create','store','edit','destroy', 'like', 'unlike');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        $profile = Profile::orderby('id', 'desc')->paginate(7);
        $posts = Post::orderby('id', 'desc')->paginate(7);
        $users = User::orderby('id', 'desc')->paginate(7);
        $setting = Setting::first();
        return view('index')->with('users', $users)->with('settings', $setting)->with('posts', $posts);
    }

    public function showUser($id) {
        $user = User::findOrFail($id);
        return view('users.show')->with('users', $user); 
    }

   

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
            ->with('flash_message', '
             '. $post->title.' created');
    }
    

    // Like system
    public function like($id){
      Like::create([
          'post_id' => $id,
          'user_id' => Auth::id()
      ]);

      Session::flash('session', 'You liked');

      return redirect()->back();
    }

    public function unlike($id){
      $like = Like::where('post_id', $id)->where('user_id', Auth::id())->first();
      $like->delete();

      Session::flash('session', 'You unliked');

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
         $like = false;
         $post = Post::findOrFail($id); //Find post of id = $id
         $profile = Profile::all();
         $posts = Post::orderby('id', 'desc')->paginate(10);
        return view ('posts.show', compact('post','profile','posts','like'));
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
            ''. $post->title.' updated');

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
             'successfully deleted');

    }
}