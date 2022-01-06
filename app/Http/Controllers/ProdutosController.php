<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdutosController extends Controller
{
    public static function getPriceInProductVtex($id) {
        $urlProductId = "https://casaevideo.corebiz.ag/vtexcommercestable/api/catalog_system/pub/products/search?fq=productId:$id";
        $response = Http::get($urlProductId);
        $priceProduct = $response->json();

        return $priceProduct[0]["items"][0]["sellers"][0]["commertialOffer"]["Price"];
    }

    public function somaDosProdutos() 
    {
        $produtoUm = ProdutosController::getPriceInProductVtex(1000); // this->getPriceInProductVtex(1000);
        $produtoDois = ProdutosController::getPriceInProductVtex(20445); // tem que estar static
        //$produtoTres = self::getPriceInProductVtex(1000); -> terceira forma de fazer
        dd($produtoUm + $produtoDois);
    }
}
