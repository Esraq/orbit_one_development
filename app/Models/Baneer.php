<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baneer extends Model
{
    protected $fillable = [
        'serial_no',
        'title',
        'slogan',
        'image',
    ];
}
