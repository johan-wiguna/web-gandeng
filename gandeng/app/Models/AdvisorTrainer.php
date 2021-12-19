<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorTrainer extends Model
{
    protected $table = 'advisor_trainers';
    protected $primarykey = 'adv_tra_id';
    public $incrementing = true;
}
