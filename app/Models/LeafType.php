<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeafType extends Model
{
    protected $fillable = [
        'leaf_type','total_number_per_box'
    ];
    use HasFactory;
}
