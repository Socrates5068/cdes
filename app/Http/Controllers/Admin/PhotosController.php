<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PhotosController extends Controller
{
    public function store(Post $post)
    {

        $this->validate(request(), [
            'photo' => 'required|image|max:2048',
        ]);

        ##FUNCIONAR EN HOSTING
        $post->photos()->create([
            'url' => 'storage/public/'.request()->file('photo')->store('posts','public')
        ]);

        ##FUNCIONAR EN LOCAL
//        $post->photos()->create([
//            'url' => 'storage/'.request()->file('photo')->store('posts','public')
//        ]);

    }

    public function destroy(Photo $photo)
    {
        $photo->delete();



        return back()->with('flash', 'Imagen Eliminada');
    }
}
