<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Back/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Back/post");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        //Image Upload
        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension= $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_.'.$extension;
            $path = $request->file('image')->storeAs('public/articles',$fileNameToStore);
            //
            $post->image = $fileNameToStore;
        }
        $post->body = $request->body;
        $post->save();
        return view('Back/post');
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
        $post = Post::find($id);
        return view('Back/edition')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        //
        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension= $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.$extension;
            $path = $request->file('image')->storeAs('public/articles',$fileNameToStore);
            //
            $post->image = $fileNameToStore;
        }
        //
        $post->save();
        $posts= Post::all();
        return view('Back/editer')->with('posts',$posts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
    }

    public function editer()
    {
        $posts = Post::all();
        return view('Back/editer')->with('posts',$posts);
    }
}
