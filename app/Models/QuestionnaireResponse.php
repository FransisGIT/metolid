<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireResponse extends Model
{
    protected $fillable = [
        'respondent_role',
        'familiarity',
        'purpose',
        'information_source',
        'expected_benefit',
        'improvement_priority',
    ];
}
