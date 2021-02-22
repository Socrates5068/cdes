<?php

namespace App\Http\Controllers;

use App\Denimg;
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
        $denuncias = Denuncia::latest()->paginate(10);
        return view('denuncias.index')->with('denuncias', $denuncias);
    }

    public function vista()
    {
        /* $denuncia = Denuncia::latest('id')->first();
        $imagenes = Denimg::where('id_denuncia', $denuncia->uuid)->get();
        $denuncia->imagenes = $imagenes; */

        return view('denuncias.vista');
        //return view('denuncias.show', compact('denuncia'));
    }

    public function create()
    {
        return view('denuncias.create');
    }

    public function store(Request $request)
    {
        $data = $request;
        $data = request()->validate([
            'observacion' => 'required|min:50|max:650',
            'descripcion' => 'required|min:20|max:200',
            //'imagen' => 'required|image|max:3000',
            'nombre' => 'required|min:10|max:50',
            'ci' => 'required|min:6|max:10',
            'domicilio' => 'required|min:10|max:50',
            'telefono' => 'required|min:5|max:10',
            'uuid' => 'required|uuid'
        ]);

        //$ruta_imagen = $request['imagen']->store('denuncia', 'public');

        //Redimensionar la imagen
        /* $img = Image::make(public_path("storage/{$ruta_imagen}"))->resize(900, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save(); */

        DB::table('denuncias')->insert([
            'observacion' => $data['observacion'],
            'descripcion' => $data['descripcion'],
            //'imagen' => $ruta_imagen,
            'nombre' => $data['nombre'],
            'ci' => $data['ci'],
            'domicilio' => $data['domicilio'],
            'telefono' => $data['telefono'],
            'uuid' => $data['uuid'],
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
        $dompdf->loadView("/denuncias/vista");
        
        return $dompdf->stream("Formulario de denuncia", array("Attachment" => 0));
    }

    public function show(Denuncia $denuncia)
    {
        $imagenes = Denimg::where('id_denuncia', $denuncia->uuid)->get();
        $denuncia->imagenes = $imagenes;

        //return response()->json($denuncia);
        return view('denuncias.show', compact('denuncia'));
    }

    public function buscar()
    {
        return view('denuncias.buscar');
    }

    public function buscar2(Request $request)
    {
        /* $busqueda = $request->get('buscar');
        $denuncias = Denuncia::where('id', '=', "57")->paginate(1);
        $denuncias->appends(['buscar' => $busqueda]); */
        
        $denuncia = new Denuncia;
        $den = Denuncia::find($request->buscar);

        if ($den == null){
            return "Este código no existe <a href='https://sedespotosi.com/'>Volver</a>";
        } else {
            $denuncia->id = $den->id;
            $denuncia->observacion= $den->observacion;
            $denuncia->descripcion = $den->descripcion;
            //$denuncia->imagen = $den->imagen;
            $denuncia->nombre = $den->nombre;
            $denuncia->ci = $den->ci;
            $denuncia->domicilio = $den->domicilio;
            $denuncia->telefono = $den->telefono;

            //return view('denuncias.show2', compact('denuncias', 'busqueda'));
            return view('denuncias.show', compact('denuncia'));
            //return $denuncias->id;
        }

    }

    public function leido(Request $request)
    {

        /* $denuncia = DB::table('denuncias')
        ->where('id', $request->id)
        ->first();
        $denuncia->update(['leido'=>TRUE]);
                
        return ['denuncia' => $denuncia]; */

        $denuncia = DB::table('denuncias')->where('id', $request->id);
        $denuncia->update(['leido'=>true]);

        $denuncias = Denuncia::latest()->paginate(10);
        return view('denuncias.index')->with('denuncias', $denuncias);
    }
}