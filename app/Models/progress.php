<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progress extends Model
{
    protected $fillable = [
        'id','building','fmProgress','dateProgess',
        'totProgess','aisProgess','3bbProgess','sinetProgess','fnProgess','trueProgess'
    ];
}
