<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncubationGallery extends Model
{
    protected $table = 'incubation_gallery';
    protected $primarykey = 'gallery_id';
    public $incrementing = true;
}
