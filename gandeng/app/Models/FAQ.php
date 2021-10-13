<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faqs';
    protected $primaryKey = 'faq_id';
    public $incrementing = true;
}
