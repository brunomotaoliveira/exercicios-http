<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdutosController extends Controller
{
    public function somaDosProdutos() 
    {
        $urlProdutoUm = "https://casaevideo.corebiz.ag/vtexcommercestable/api/catalog_system/pub/products/search?fq=productId:20445";
    
        $urlProdutoDois = "https://casaevideo.corebiz.ag/vtexcommercestable/api/catalog_system/pub/products/search?fq=productId:92948";

        $responseProdutoUm = Http::get($urlProdutoUm);
        $responseProdutoDois = Http::get($urlProdutoDois);

        $valorProdutoUm = $responseProdutoUm->json();
        
        $valorProdutoDois = $responseProdutoDois->json();

        foreach($valorProdutoUm as $valorProd1) {
            foreach($valorProd1["items"] as $priceProdutoUm) {
                foreach($priceProdutoUm["sellers"] as $price1) {
                    $listPriceTrue = [];
                    //return response($price1["commertialOffer"]);
                    foreach($price1["commertialOffer"] as $priceTrue) {
                        //array_push($listPriceTrue, $priceTrue["price"]);
                        return $priceTrue; 

                    } 
                    
                }
            }
        }


        
//items > sellers > commertialOffer > price
    }

}
