<?php

namespace App\Http\Controllers;

use App\Image;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $posts = Post::latest()
            ->take(3)
            ->get();

        if ($post->isPublished() || auth()->check())
        {
            return view('posts.show', compact('post', 'posts'));
        }
        abort(404);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(4);
        $post = Post::inRandomOrder()
            ->take(3)
            ->get();
        return view('posts.index', compact('post', 'posts'));

    }


    public function busqueda(Request $request)
    {
//        dd($request->get('busqueda'));
        if ($request->get('busqueda')) {
            $posts = Post::where("body", "LIKE", "%{$request->get('busqueda')}%")
                ->paginate(5);



        }
        if($posts){
            return view('posts.busqueda', compact('posts'));
        }else{
            $posts = "nada";
            return view('posts.busqueda', compact('posts'));
        }
    }

}
