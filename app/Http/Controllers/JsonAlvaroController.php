<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonAlvaroController extends Controller
{
    public function index()
    {
        $path = base_path('tenisfutbol.json');
        if (!file_exists($path)) {
            abort(404, 'Archivo tenisfutbol.json no encontrado.');
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);
        $items = $data['botas_futbol'] ?? [];

        return view('jsonalvaro', ['items' => $items]);
    }

    public function show($index)
    {
        $path = base_path('tenisfutbol.json');
        if (!file_exists($path)) {
            abort(404, 'Archivo tenisfutbol.json no encontrado.');
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);
        $items = $data['botas_futbol'] ?? [];

        if (!isset($items[$index])) {
            abort(404, 'Marca no encontrada.');
        }

        $brand = $items[$index];

        return view('jsonalvaro_detail', ['brand' => $brand, 'index' => $index]);
    }
}
