<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCarousel extends Model
{
    protected $table = 'home_carousels';
    protected $primarykey = 'carousel_id';
    public $incrementing = true;
}
