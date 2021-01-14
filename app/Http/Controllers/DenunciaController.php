<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Options;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class DenunciaController extends Controller
{
    public function index()
    {
        /* $denuncias = Denuncia::latest('id')->first(); */

        return view('denuncias.index');
    }

    public function create()
    {
        return view('denuncias.create');
    }

    public function store(Request $request)
    {
        /* $data = request()->validate([
            'observacion' => 'required',
            'descripcion' => 'required',
            //'imagen' => 'required|image'
        ]); */

        $data = $request;

        $ruta_imagen = $request['imagen']->store('denuncia', 'public');

        //Redimensionar la imagen
        /* $img = Image::make(public_path("storage/{$ruta_imagen}"))->resize(900, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save(); */

        DB::table('denuncias')->insert([
            'observacion' => $data['observacion'],
            'descripcion' => $data['descripcion'],
            'nota' => $ruta_imagen,
            'nombre' => $data['nombre'],
            'ci' => $data['ci'],
            'domicilio' => $data['direccion'],
            'telefono' => $data['telefono'],
        ]);

        return redirect()->action('DenunciaController@pdf');
        //return $ruta_imagen;
    }

    public function pdf()
    {
        /* $options = new Options();
        $options->setIsHtml5ParserEnabled(true); */
        $dompdf = App::make("dompdf.wrapper");
        $dompdf->setPaper(array(0,0,612.00,792.00), 'portrait');
        $dompdf->loadView("/denuncias/index");
        
        return $dompdf->stream("Formulario de denuncia", array("Attachment" => 0));
    }
}