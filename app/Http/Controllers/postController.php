<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class postController extends Controller
{
    public function index(){

        $posts = Post::all();
        
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }
    public function show(Post $post){
        // $request= request();

        // $postId=$request->post;
        // $post = Post::find($postId);
        // $post = Post::where('id',$postId)->get();
        
        return view('posts.show',[
            'post'=>$post,
        ]);
    }
    public function create(){
        $users = User::all();

        return view('posts.create',[
            'users' => $users,
        ]);
    }
    public function store(){
        
        $request =request();
        
        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('posts.index');
    }
    public function edit(){
        $request= request();

        $postId=$request->post;
        $post = Post::find($postId);
        $users = User::all();
        return view('posts.edit',[
            'post'=>$post,
            'users' => $users,
        ]);
    }
    public function update(Request $request, $id){
        
        // $post = Post::where('id',$id)->get();
        Post::where('id', $id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id' => $request->user_id,
            ]);
        // Post::where('id', '=', $id)->first();

        // $post->update($request->all());
        return redirect()->route('posts.index');
    }
    public function destroy($id){
        $post = Post::find($id);
        $post -> delete();
        return redirect()->route('posts.index');
    }
}
