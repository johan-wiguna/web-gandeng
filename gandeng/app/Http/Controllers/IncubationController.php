<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class IncubationController extends Controller
{
    public function index() {
        $car_imgs = DB::select('select * from incubation_carousels');
        $adv_train = DB::select('select * from advisor_trainers');
        $incubatees = DB::select('select * from incubatees');
        return view('program-incubation', [
            "title" => "G-Incubation",
            "car_imgs" => $car_imgs,
            "adv_train" => $adv_train,
            "incubatees" => $incubatees
        ]);
    }
}