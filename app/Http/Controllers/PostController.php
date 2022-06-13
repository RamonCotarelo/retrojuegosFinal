<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
 


class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::where('status', 2)->latest('id')->paginate(8);
        
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){


        return view('posts.show', compact('post'));
    }


    public function category(Category $category){
           

            $posts = Post::where('category_id', $category->id)->where('status', 2)-> latest('id')->paginate(6);

            return view('posts.category', compact('posts','category'));
    }

   

}



