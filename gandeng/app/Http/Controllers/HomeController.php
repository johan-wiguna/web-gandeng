<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        // $car_imgs = DB::select('select * from home_carousels');
        $instagramPosts = $this->getInstagramPosts();
        return view('home', [
            "title" => "Home",
            // "car_imgs"=>$car_imgs
            "instagramPosts" => $instagramPosts
        ]);
    }

    public function getInstagramPosts() {
        $response = Http::withHeaders([
            'Accept'=> 'application/json',
            'Content-Type'=> 'application/json',
        ])->get('https://www.instagram.com/gandengfoundation', [
            '__a' => 1,
        ]);
        
        echo "test";

        return $response;
        
    }

}