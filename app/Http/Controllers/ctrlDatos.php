<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ctrlDatos extends Controller
{
    //
    public function AccesoDatosVista()
    {
        $pro = Product::all();

        return view('vistadatosblade')->with(compact('pro'));
    }

    public function AccesoDatosVistaLink()

    {
        $response = Http::get('https://api.sampleapis.com/movies/comedy');
        $enlace = $response->successful() ? $response->json() : [];

        return view('vistadatoslink')->with(compact('enlace'));

    }

    public function AccesoDatosApiMia()
    {
        $response = Http::get('https://holisss.mundoiti.com/');
        $enlace = $response->successful() ? $response->json() : [];

        return view('apimia')->with(compact('enlace'));
    }

    public function AccesoDatosJsonAlvaro()
    {
        $jsonPath = base_path('json Alvaro.json');
        $jsonData = [];
        
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $jsonData = json_decode($jsonContent, true);
        }

        return view('datosapinia')->with(compact('jsonData'));
    }

    public function AccesoAlvarus(){
        $enlace = Http::get('https://alvarolopezg.netlify.app/json/apiMia.json');
        $alvaroJson = $enlace->json();
        return view('alvarus')->with(compact('alvaroJson'));
    }




    public function AccesosDatosLiinkMundoITI()
    {
        $response = Http::get('https://holisss.mundoiti.com/');
        $traductorson = $response->successful() ? $response->json() : [];

        return view('vista_mundoiti')->with(compact('traductorson'));
    }
}

