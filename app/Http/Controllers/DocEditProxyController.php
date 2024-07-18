<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DocEditProxyController extends Controller
{
    public function index(Request $req){
        $client = new Client();
        $uri = 'http://localhost:8080/editor';
        $res = $client->get($uri);
        return response($res->getBody()->getContents(), $res->getStatusCode())->withHeaders($res->getHeaders());
    }
}
