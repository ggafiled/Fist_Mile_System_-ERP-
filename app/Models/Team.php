<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'building_id',
        'teamName',
    ];

    public function buildings()
	{
		return $this->hasMany('App\Models\Building','id','building_id');
	}
}
