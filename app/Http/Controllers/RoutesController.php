<?php

namespace App\Http\Controllers;

use App\Document;
use App\Image;
use App\Post;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function home(Request $request)
    {

            //        $posts = Post::all()->take(2);
        $images = Image::all();
        $posts = Post::latest()
            ->where("excerpt","!=",null)
            ->take(3)
            ->get();
        return view('index', compact('posts', 'images'));

    }



    public function articles()
    {
        $posts = Post::published()->paginate(6);
        //return $posts;
        return view('articles', compact('posts'));
    }

    public function activities()
    {
        return view('activities');
    }

    public function administrativa()
    {
        return view('unidades.administrativa');
    }
    public function antecedentes()
    {
        return view('sedes.antecedentes');
    }
    public function auditoria()
    {
        return view('unidades.auditoria');
    }

    public function autoridades()
    {
        return view('sedes.autoridades');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function direccion()
    {
        return view('unidades.direccion');
    }

    public function epidemiologia()
    {
        return view('unidades.epidemiologia');
    }


    public function juridica()
    {
        return view('unidades.juridica');
    }

    public function mision()
    {
        return view('sedes.mision');
    }

    public function planificacion()
    {
        return view('unidades.planificacion');
    }

    public function promocion()
    {
        return view('unidades.promocion');
    }

    public function redes()
    {
        return view('unidades.redes');
    }

    public function seguros()
    {
        return view('unidades.seguros');
    }

    public function telefonosip()
    {
        return view('sedes.telefonosip');
    }

    public function organigrama()
    {
        return view('sedes.organigrama');
    }

    public function documentos()
    {
        $documents = Document::all();
        return view('sedes.documentos', compact('documents'));
    }

    public function galery()
    {
        $images = Image::all();
        return view('sedes.galeria', compact('images'));
    }
}
