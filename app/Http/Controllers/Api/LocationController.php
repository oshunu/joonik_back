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
                'image' => 'https://sportal365images.com/process/smp-images-production/abola.pt/22112023/ddc11ac7-4e6f-4f54-ac77-b996af152034.jpg?operations=fit(960:)',
                'creationDate' => '1957-09-24',
            ],
            [
                'code' => 3,
                'name' => 'Old Trafford',
                'image' => 'https://static.posters.cz/image/750webp/22590.webp',
                'creationDate' => '1910-02-19',
            ],
            [
                'code' => 4,
                'name' => 'Estadio Azteca',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '1966-05-29',
            ],
            [
                'code' => 5,
                'name' => 'Maracanã',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '1950-06-16',
            ],
            [
                'code' => 6,
                'name' => 'Allianz Arena',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '2005-05-30',
            ],
            [
                'code' => 7,
                'name' => 'Wembley Stadium',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '2007-03-09',
            ],
            [
                'code' => 8,
                'name' => 'San Siro',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '1926-09-19',
            ],
            [
                'code' => 9,
                'name' => 'Signal Iduna Park',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '1974-04-02',
            ],
            [
                'code' => 10,
                'name' => 'Estadio Monumental',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Santiago_Bernabeu_Stadium_-_panoramio.jpg/800px-Santiago_Bernabeu_Stadium_-_panoramio.jpg',
                'creationDate' => '1938-05-25',
            ],
        ];

        return response()->json([
            'data' => $locations
        ]);
    }
}
