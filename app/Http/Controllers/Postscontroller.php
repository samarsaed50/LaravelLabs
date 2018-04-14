<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
class Postscontroller extends Controller
{
    public function index(){
     $posts=Post::all();
     return view('posts.index',[
         'posts'=>$posts
         ]);
    }
    public function create(){
        $users=User::all();
        return view('posts.create',[
           'users'=>$users
        ]);
    }
    public function store(Request $request){
        Post::create([
          'title'=>$request->title,
          'description'=>$request->description,
          'user_id'=>$request->user_id
        ]);
        return redirect(route('posts.index'));
    }
    public function show($id){
        $post=Post::find($id);
        return view('posts.show',[
            'post'=>$post
        ]);
    }
    public function edit($id){
        $post=Post::find($id);
        $users=User::all();
        return view('posts.edit',[
            'post'=>$post,
            'users'=>$users
        ]);
    }
    public function update(Request $request,$id){
        //$data=$request->all();
        Post::where('id',$id)->update([
          'title'=>$request->title,
          'description'=>$request->description,
          

        ]);
      
        return redirect(route('posts.index'));
    }
    public function destroy($id){
        //update post data
        Post::find($id)->delete();
        
        //store status message

        return redirect()->route('posts.index');
    }

}
