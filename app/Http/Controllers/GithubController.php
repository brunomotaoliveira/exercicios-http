<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{
    public function buscarGithub() {

        $url = "https://api.github.com/users/defunkt";

        $response = Http::get($url);

        $dadosGithub = $response->json();

        return response($dadosGithub['name']);
    }
}
