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
        'professor_title_id',
        'name',
        'last_name',
        'email',
        'link',
        'university_name',
        'field_of_study',
        'research_interest',
        'state_name',
        'city_name',
        'country_name',
    ];

//    public function continent() {
//
//    }
//
//    public function professorTitle() {
//        $this->belongsTo(ProfessorTitle::class,'professor_title_id','id');
//    }
}
