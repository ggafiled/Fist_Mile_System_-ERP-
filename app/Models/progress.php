<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progress extends Model
{
    protected $fillable = [
        'building','fmProgess','dateProgess',
        'totProgess','aisProgess','3bbProgess','sinetProgess','trueProgess'
    ];
}
