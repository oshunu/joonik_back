<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{

    public function index(Request $request)
    {
        $data = $request->all();

        $locations = [
            [
                'code' => 1,
                'name' => 'Estadio Santiago Bernabéu',
                'image' => 'https://www.acerinox.com/export/sites/acerinox/es/soluciones/aceros-inoxidables/producto-plano/.galleries/IMAGENES-Aplicaciones-de-Producto-Plano/Reforma-del-estadio-Santiago-Bernabeu.jpg_492402003.jpg',
                'creationDate' => '1947-12-14',
            ],
            [
                'code' => 2,
                'name' => 'Camp Nou',
                'image' => 'https://example.com/images/campnou.jpg',
                'creationDate' => '1957-09-24',
            ],
            [
                'code' => 3,
                'name' => 'Old Trafford',
                'image' => 'https://example.com/images/oldtrafford.jpg',
                'creationDate' => '1910-02-19',
            ],
            [
                'code' => 4,
                'name' => 'Estadio Azteca',
                'image' => 'https://example.com/images/azteca.jpg',
                'creationDate' => '1966-05-29',
            ],
            [
                'code' => 5,
                'name' => 'Maracanã',
                'image' => 'https://example.com/images/maracana.jpg',
                'creationDate' => '1950-06-16',
            ],
            [
                'code' => 6,
                'name' => 'Allianz Arena',
                'image' => 'https://example.com/images/allianz.jpg',
                'creationDate' => '2005-05-30',
            ],
            [
                'code' => 7,
                'name' => 'Wembley Stadium',
                'image' => 'https://example.com/images/wembley.jpg',
                'creationDate' => '2007-03-09',
            ],
            [
                'code' => 8,
                'name' => 'San Siro',
                'image' => 'https://example.com/images/sansiro.jpg',
                'creationDate' => '1926-09-19',
            ],
            [
                'code' => 9,
                'name' => 'Signal Iduna Park',
                'image' => 'https://example.com/images/signaliduna.jpg',
                'creationDate' => '1974-04-02',
            ],
            [
                'code' => 10,
                'name' => 'Estadio Monumental',
                'image' => 'https://example.com/images/monumental.jpg',
                'creationDate' => '1938-05-25',
            ],
        ];

        return response()->json([
            'data' => $locations
        ]);
    }

}
