<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'clint_name',
        'message',
        'position',
        'photo',
    ];
}
