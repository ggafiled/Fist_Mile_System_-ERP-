<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Member extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'building_id',
        'nameMember',
        'surnameMember',
        'phoneMember',
        'isp',
        'roomNumber',
        'floorNumber',
        'buildingNumber',
    ];

}
