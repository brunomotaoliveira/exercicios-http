<?php 

namespace App\Http\Controllers;

use App\Models\Cluster;
use Illuminate\http\Client\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CorreiosController extends Controller {
    public function buscardados() {
        

        $urlBusca = "https://viacep.com.br/ws/01001000/json/unicode/";

        $response = Http::get($urlBusca);

        $dadosDaBusca = $response->json();
        
        return response($dadosDaBusca['ibge']);
        $produtoDois = ProdutosController::getPriceInProductVtex(20445);
    }

    
}

?>