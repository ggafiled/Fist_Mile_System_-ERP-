<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'buildingName',
        'fmCode',
        'houseNumber',
        'squadNumber',
        'alleyName',
        'roadName',
        'districtName',
        'countyName',
        'provinceName',
        'postalCode',
        'contractSell',
        'contractDate',
        'contractTime',
        'spendSpace',
        'condition',
        'contractPeriod',
        'contractStartDate',
        'contractExpirationDate',
        'nameManager',
        'phoneManager',
        'mailManager',
        'nameNiti',
        'phoneNiti',
        'mailNiti',
        'team',
        'nameTechnician',
        'phoneTechnician',
        'mailTechnicianName',
        'areaN',
        'bbN',
        'area3BB',
        'areaTrue',
        'operatingTime',
    ];
}
