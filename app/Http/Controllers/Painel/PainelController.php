<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function getIndex(){
        return 'hme do painel site';
    }


    public function missingMethod($parameters = array()){
        echo 'Erro 404, Pagina não encontrada';
    }

}
