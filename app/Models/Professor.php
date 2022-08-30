<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'user_id',
        'continent_id',
        'professor_title_id',
        'university_name',
        'city_name',
        'country_name',
        'field_of_study_name',

    ];
}
