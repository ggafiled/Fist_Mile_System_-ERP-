<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Progress extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'building_id',
        'fmProgress',
        'dateFm',
        'totProgress',
        'dateTot',
        'aisProgress',
        'dateAis',
        'progress3bb',
        'date3BB',
        'sinetProgress',
        'dateSinet',
        'fnProgress',
        'dateFn',
        'trueProgress',
        'dateTrue',
    ];
    public function building()
	{
		return $this->hasOne('App\Models\Building','id','building_id');
	}
}
