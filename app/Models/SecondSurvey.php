<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondSurvey extends Model
{
    protected $table = 'secondSurveys';

    protected $fillable = [
        'user_id',
        'question_id',
        'answer',
        'doneAndo',
    
    ];
    use HasFactory;
}
