<?php 

namespace App\Http\Controllers;

use App\Models\Cluster;
use Illuminate\http\Client\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CorreiosController extends Controller {
    public static function getCepInViaCep($cep) {
        
        $urlBusca = "https://viacep.com.br/ws/$cep/json/unicode/";
        $response = Http::get($urlBusca);
        $dadosDaBusca = $response->json();

        return (object) $dadosDaBusca[0]->ibge;
        
    }

    public function buscaDados() {
        $cepConsultado = CorreiosController::getCepInViaCep(01001000);
        dd($cepConsultado);
    }
    
}

?>