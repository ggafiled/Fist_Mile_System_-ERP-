<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Constarution extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'buildingName',
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
