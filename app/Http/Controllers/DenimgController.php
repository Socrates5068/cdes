<?php

namespace App\Http\Controllers;

use App\Denimg;
use Illuminate\Http\Request;
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

        return $request->all();

        // Almacenar con Modelo
        /* $imagenDB = new Denimg();
        $imagenDB->id_establecimiento = $request['uuid'];
        $imagenDB->ruta_imagen = $ruta_imagen;

        $imagenDB->save();
    } */
    }
}
