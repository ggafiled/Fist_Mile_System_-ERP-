<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Constarution extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'projectName',
        'desingBy',
        'surveyDesing',
        'surveyDesingDate',
        'surveyDesingDateBy',

        'ifcc',
        'ifccDate',

        'wallBox',
        'wallBoxDate',

        'type',
        'microductD',
        'microductDateD',

        'microductK',
        'microductDateK',

        'fiberConvertion',
        'fiberConvertionDateD',

        'blow',
        'splice',
    ];
}
