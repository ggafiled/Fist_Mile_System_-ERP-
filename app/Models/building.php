<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'projectName',
        'buildingSum',
        'floorSum',
        'roomSum',
        'fmCode',

        'nameManager',
        'phoneManager',
        'mailManager',
        'nameNiti',
        'phoneNiti',
        'mailNiti',

        'houseNumber',
        'squadNumber',
        'alleyName',
        'roadName',
        'districtName',
        'countyName',
        'provinceName',
        'postalCode',

        'longitude',
        'latitude',

        'contractSell',
        'contractDate',
        'spendSpace',
        'condition',
        'contractPeriod',

        'areaN',
        'bbN',
        'area3BB',
        'areaTrue',
        'areaTrueNew',
        'areaAis',
        'areaFiberNet',
        'operatingTime',
    ];
}
