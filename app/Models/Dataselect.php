<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataselect extends Model
{
    use HasFactory;
    protected $fillable = [
        'constructionOperation',
    ];
}
