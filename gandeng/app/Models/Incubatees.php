<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incubatees extends Model
{
    protected $table = 'incubatees';
    protected $primarykey = 'incubatees_id';
    public $incrementing = true;
}
