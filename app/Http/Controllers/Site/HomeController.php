<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex(){
        return 'hme do site';
    }

    public function getContato(){
        return 'PAgina de contato';
    }

    public function getSobre(){
        return 'Sobre';
    }

    public function missingMethod($parameters = array()){
        echo 'Erro 404, Pagina não encontrada';
    }

}
