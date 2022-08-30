<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'continent_id',
        'city_id',
        'country_id',
        'field_of_study_id',
        'user_id',
        'professor_title_id',
        'name',
        'email',
    ];
}
