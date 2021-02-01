<?php

namespace App\Http\Controllers;

use App\Denimg;
use App\Denuncia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class DenimgController extends Controller
{
    public function store(Request $request) {
        // leer la imagen
        $ruta_imagen = $request->file('file')->store('denimg', 'public');

        // Resize a la imagen
        $imagen = Image::make( public_path("storage/{$ruta_imagen}"))->resize(750, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $imagen->save();

        
        // Almacenar con Modelo
        $imagenDB = new Denimg();
        $imagenDB->id_denuncia = $request['uuid'];
        $imagenDB->ruta_imagen = $ruta_imagen;

        $imagenDB->save();

        //Retornar respuesta
        $respuesta = [
            'archivo' => $ruta_imagen
        ];
        
        return response()->json($respuesta);
    }

    public function destroy (Request $request ) {
        // Validación
        $uuid = $request->get('uuid');
        $denuncia = Denuncia::where('uuid', $uuid)->first();
        $this->authorize('delete', $denuncia);

        // Imagen a eliminar
        $imagen = $request->get('imagen');

        if(File::exists('storage/' . $imagen)) {
           // Elimina imagen del servidor
           File::delete('storage/' . $imagen);

           // elimina imagen de la BD
           Denimg::where('ruta_imagen', $imagen )->delete();

           $respuesta = [
                'mensaje' => 'Imagen Eliminada',
                'imagen' => $imagen
            ];
        }

        return response()->json($respuesta);
    }
}
