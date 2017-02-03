<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        $tituloHome = "Blog Claudio";
        $subTitulo = "Tecnologia a cima de tudo";

        $arrPost = [
            0 => [
                    'titulo' => "Tecnologia 1",
                    'descricao' => "Uma Pequena descrição do post 01",
                    'autor' => "Claudio",
                    'mes' => "Janeiro",
                    'dia' => 3,
                    'ano' => 2017
                ],
            1 => [
                    'titulo' => "Tecnologia 2",
                    'descricao' => "Uma Pequena descrição do post 02",
                    'autor' => "João",
                    'mes' => "Janeiro",
                    'dia' => 3,
                    'ano' => 2017
                ],
            2 => [
                    'titulo' => "Tecnologia 3",
                    'descricao' => "Uma Pequena descrição do post 03",
                    'autor' => "Elaine",
                    'mes' => "Janeiro",
                    'dia' => 3,
                    'ano' => 2017
                ]
            ];
        return view('index.index',['tituloHome' => $tituloHome, 'subTitulo' => $subTitulo, 'arrPost' => $arrPost]);
    }

}
