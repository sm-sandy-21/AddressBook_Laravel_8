<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class postController extends Controller
{
    public function addPost()
    {
        return view ("add-post");
    }

    public function createPost(Request $request)
    {
        $post = new Post();
        $post->Uname = $request->Uname;
        $post->Uemail = $request->Uemail;
        $post->Uphone = $request->Uphone;
        $post->save();
        return redirect('posts')->with('post_created','Post hass been creted successfully');

    }
    public function getPost()
    {
        $posts = Post::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    } 
    public function getPostbyid($id)
    {
        $post = Post::Where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post_delete','Post hass been Deleted successfully');
        
    }
    public function editPost($id)
    {
        $post=Post::find($id);
        return view('edit-post',compact('post'));
        
    }
    public function updatePost(Request $request)
    {
        $post=Post::find($request->id);
        $post->Uname = $request->Uname;
        $post->Uemail = $request->Uemail;
        $post->Uphone = $request->Uphone;
        $post->save();
        return redirect('posts')->with('post_update','Post hass been Updated successfully');        
    }

    public function searchByname($Uname)
    {
       return Post::where('Uname',$Uname)->get();
    

    }
   

  

}
