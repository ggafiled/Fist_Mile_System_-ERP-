<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = [
        'id','buildingId','fmProgress','dateProgress',
        'totProgress','aisProgress','Progress3bb','sinetProgress','fnProgress','trueProgress','update_at'
    ];
}