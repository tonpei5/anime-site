<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class GetController extends Controller
{

   public function index()
        {
        $url = 'https://app.rakuten.co.jp/services/api/IchibaItem/Ranking/20170628?';
        $applicationId = 'applicationId=1021681195931246113';
        $affiliateId = 'affiliateId=2e14bfdc.9c587c2b.2e14bfdd.2006546c';
        $genreId = 'genreId=112203';
        $req = $url . $applicationId .'&'. $affiliateId .'&'. $genreId;

        $method = "GET";

        $client = new Client();

        $response = $client->request($method,$req);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        // 配列の値を取り出す 
        $posts=$posts['Items'];

        // dd($posts);

        return view('index',['posts'=>$posts]);

        }

}