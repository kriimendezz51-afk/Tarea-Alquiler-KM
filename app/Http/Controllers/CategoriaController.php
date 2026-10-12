<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        dd($categorias);
    }

    public function equipos()
    {
        $categorias = Categoria::find(1);
        $equipos = $categorias->equipos;
        dd($equipos);
    }

    public function conEquipos()
    {
        $categorias = Categoria::with('equipos')->get();
        dd($categorias);
    }
}