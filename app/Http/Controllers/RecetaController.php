<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    public function store(Request $request)
    {
        Receta::create($request->all());
        return redirect()->route('consultas.index');
    }
}
