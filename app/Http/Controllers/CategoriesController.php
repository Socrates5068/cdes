<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->posts;
        return view('index', [
            'title' => "Publicaciones de la categoria '{$category->name}'",
            'posts' => $category->posts()->paginate()
        ]);
    }
}
