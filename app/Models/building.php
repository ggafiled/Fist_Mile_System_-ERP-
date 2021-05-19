<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'BuildingName',
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
    public function progress()
	{
		return $this->belongsTo('App\Models\Progress','building_id','id');
	}

    public function constarution()
	{
		return $this->belongsTo('App\Models\Constarution','building_id','id');
	}

    public function team()
	{
		return $this->belongsTo('App\Models\Team','building_id','id');
	}

    public function member()
	{
		return $this->belongsTo('App\Models\Member','building_id','id');
	}
}
