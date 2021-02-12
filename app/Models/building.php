<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'building','fmCode','contactName','phone',
        'area','numberLayer','floor','roomNumber','contract','contracttime',
        'detailAdress','province','city','postalCode',
        'zone','latitude','longtude','priceSquare','workingTime','blance',
        'developer','grade'
    ];
}
