<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $car_imgs = DB::select('select * from home_carousels');
        return view('home', [
            "title" => "Home",
            "car_imgs"=>$car_imgs
        ]);
}
}