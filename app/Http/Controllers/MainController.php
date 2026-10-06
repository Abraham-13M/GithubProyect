<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        return view('index');
    }

    function about()
    {
        return view('about');
    }

    function array()
    {
        // array prehistorico
        $array1 = array();

        // array actual
        $array2[] = 'Juan';
        $array2[] = 'Pepe';
        $array2[10] = 'Elizabeth';
        $array2[11] = 'Paco';

        $array3 = ['Juan', 'Pepe', 'Maria'];

        $alumnos = [
            ['nombre' => 'Ajarif Saika, Fátima', 'numero' => 3],
            ['nombre' => 'Albarrán Joya, Antonio', 'numero' => 19],
            ['nombre' => 'Burgos Tomé, Adrián', 'numero' =>19],
            ['nombre' => 'Castillo García, Joaquín', 'numero' => 21],
            ['nombre' => 'El Issmail Al Assaf, Amara', 'numero' => 20],
            ['nombre' => 'Fernández Álvarez, Adrián', 'numero' => 19],
            ['nombre' => 'Galdón Fernández, Abraham', 'numero' => 22],
            ['nombre' => 'García González, Ignacio', 'numero' => 20],
            ['nombre' => 'García López, Pilar', 'numero' => 20],
            ['nombre' => 'Gorlat Castro, Raúl', 'numero' => 19],
            ['nombre' => 'Hernández Recio, Iván', 'numero' => 27],
            ['nombre' => 'Kordass Rjaf-Allah, Noussayr', 'numero' => 19],
            ['nombre' => 'Maldonado Navarro, Manuel', 'numero' => 22],
            ['nombre' => 'Montero Pelegrina, Pedro', 'numero' => 20],
            ['nombre' => 'Montoro Ruiz, Alba', 'numero' => 19],
            ['nombre' => 'Pérez Montalbán, Christian', 'numero' => 19],
            ['nombre' => 'Sánchez Sorroche, José', 'numero' => 20],
            ['nombre' => 'Serrano Rodríguez, Pablo', 'numero' => 19],
            ['nombre' => 'Vereda Orozco, Gonzalo Jesús', 'numero' => 19],
            ['nombre' => 'Vicaria García, Francisco Javier', 'numero' => 24],
            ['nombre' => 'Vilar Martín, Blas', 'numero' => 18],
            ['nombre' => 'Villegas Rivera, Luis', 'numero' => 20],
            ['nombre' => 'Carrascosa, Pablo', 'numero' => 19],
        ];

        $grupo = 'Segundo de Desarrollo de Aplicaciones web A';

        return view('array', [
            'grupo' => $grupo,
            'alumnos' => $alumnos,
            'profesor' => 'Carmelo'
        ]);
    }

    function portfolio()
    {
        return view('portfolio');
    }
}