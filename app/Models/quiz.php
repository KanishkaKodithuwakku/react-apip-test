<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $fillable = [
        'quections',
        'correct_answer',
        'wrong_answer_01',
        'wrong_answer_02',
        'wrong_answer_03',
    ];
}
