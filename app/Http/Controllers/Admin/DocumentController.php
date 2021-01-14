<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.documents.create');
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
            'cover' => 'max:500000|dimensions:min_width=200, min_height=200|image',
            'description' => 'min:10',
            'filename' => 'max:500000|mimes:pdf'
        ]);
        $errors = $validator->errors();
        if ($validator->fails()){
            return view('admin.documents.create', compact('errors'));
        }else{
            #1.Subir el archivo
            $cover = $request->file('cover');
            $pdf = $request->file('filename');
            $extensionCover = $cover->getClientOriginalExtension(); //trae la extension
            $extensionPDf = $pdf->getClientOriginalExtension(); //trae la extension
            $name = str_random(20);
            $coverName = $name.'.'.$extensionCover;
            $pdfName = $name.'.'.$extensionPDf;
            Storage::disk('publicCovers')->put($coverName, File::get($cover));
            Storage::disk('publicPdf')->put($pdfName, File::get($pdf));

            #2.Insertando a la DB
            $rutaCover = 'uploads/uploads/images/covers/'.$coverName;
            $rutaPdf = 'uploads/uploads/documents/'.$pdfName;
            $image = new Document();
            $image->title = $request->title;
            $image->cover = $rutaCover;
            $image->description = $request->description;
            $image->filename = $rutaPdf;
            $image->save();
            return redirect()->route('admin.documents.index')->withFlash('El Documento ha sido creado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {

//        Storage::disk('s3')->delete('folder_path/file_name.jpg');
//        Storage::disk('s3')->delete('folder_path/file_name.jpg');
        $document->delete();
        return back()->withFlash('Documento Eliminado exitosamente');
    }
}
