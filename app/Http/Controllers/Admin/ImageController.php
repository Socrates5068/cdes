<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ### Validator

        $validator = Validator::make($request->all(),[
            'title' => 'min:5',
            'category' => 'required',
            'filename' => 'max:500000|dimensions:min_width=560, min_height=380|image'
        ]);
        $errors = $validator->errors();
        if ($validator->fails()){
            return view('admin.images.create', compact('errors'));
        }else{
            #1.Subir el archivo
            $filename = $request->file('filename');

            $extension = $filename->getClientOriginalExtension(); //trae la extension

            $fname = str_random(20).'.'.$extension;
            Storage::disk('publicImages')->put($fname, File::get($filename));

            #2.Insertando a la DB
            $ruta = 'uploads/uploads/images/'.$fname;
            $image = new Image();
            $image->title = $request->title;
            $image->category = $request->category;
            $image->filename = $ruta;
            $image->save();
            return redirect()->route('admin.images.index')->withFlash('La imagen ha sido creada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
//        dd($image);
        $image->delete();
//        Storage::disk('publicImages')->delete($image);
        return back()->withFlash('Imagen Eliminada');
    }
}
