<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstSurvey extends Model
{
    protected $table = 'firstSurveys';

    protected $fillable = [
        'user_id',
        'question_id',
        'answer',
        'doneAndo',

        
    ];
    use HasFactory;
}
