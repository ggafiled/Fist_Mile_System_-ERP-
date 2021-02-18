<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progress extends Model
{
    protected $fillable = [
        'id','building','fmProgress','dateProgress',
        'totProgress','aisProgress','3bbProgress','sinetProgress','fnProgress','trueProgress'
    ];
}