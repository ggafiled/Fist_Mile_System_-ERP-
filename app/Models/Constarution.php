<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Constarution extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'building_id',
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
    public function building()
	{
		return $this->hasOne('App\Models\Building','id','building_id');
	}


}
