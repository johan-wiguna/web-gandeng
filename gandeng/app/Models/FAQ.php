<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'f_a_q_s';
    protected $primaryKey = 'faq_id';
    public $incrementing = true;
}
