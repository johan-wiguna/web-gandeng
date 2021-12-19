<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncubationCarousel extends Model
{
    protected $table = 'incubation_carousels';
    protected $primarykey = 'carousel_id';
    public $incrementing = true;
}
