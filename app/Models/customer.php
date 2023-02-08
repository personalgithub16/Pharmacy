<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email_address',
        'phone_number',
        'national_id_card',
        'birth_certificate',
        'address',
        'city',
        'country',
        'mobile_number',
        'zipCode'
    ];
    use HasFactory;
}
