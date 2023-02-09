<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['manufacturer_name','agent_national_id_card',
        'agent_mobile_number',
        'debit_balance',
        'total_debit',
    ];
    use HasFactory;
}
