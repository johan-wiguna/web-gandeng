<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class IncubationController extends Controller
{
    public function index() {
        $gallery_imgs = DB::select('select * from incubation_gallery');
        $adv_trains = DB::select('select * from advisor_trainers');
        $incubatees = DB::select('select * from incubatees');
        return view('program-incubation', [
            "title" => "G-Incubation",
            "gallery_imgs" => $gallery_imgs,
            "adv_trains" => $adv_trains,
            "incubatees" => $incubatees
        ]);
    }
}