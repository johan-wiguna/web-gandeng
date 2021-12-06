<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {
        $car_imgs = DB::select('select * from home_carousels');
        $instagramPosts = $this->getInstagramPosts();
        return view('home', [
            "title" => "Home",
            "car_imgs"=>$car_imgs,
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
        
        $posts_json = $response['graphql']['user']['edge_owner_to_timeline_media']['edges'];
        $post_thumbnail_links = [];

        // get thumbnail link for each post
        for ($i = 0; $i < 9; $i++) {
            array_push($post_thumbnail_links, $posts_json[$i]['node']['display_url']);
        } 

        return $post_thumbnail_links;
    }

}