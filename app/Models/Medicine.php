<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\LeafType;
use App\Models\MedicineType;
use App\Models\MedicineUnit;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\SoftDeletes;
class Medicine extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bar_code',
        'medicine_name',
        'generic_name',
        'vat',
        'expire_date_of_the_medicine',
        'medicine_details',
        'medicine_selling_price',
        'medicine_manufacturer_price',
        'image',
        'category_id',
        'medicine_type_id',
        'manufacturer_id',
        'leaftype_id',
        'unit_id'
    ];

    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function get_medicine_type_id()
    {
        return $this->belongsTo('App\Models\MedicineType', 'medicine_type_id');
    }

    public function get_manufacturer_id()
    {
        return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_id');
    }

    public function get_leaftype_id()
    {
        return $this->belongsTo('App\Models\LeafType', 'leaftype_id');
    }
    public function get_medicineUnit_id()
    {
        return $this->belongsTo('App\Models\MedicineUnit', 'unit_id');
    }
    
    use HasFactory;
}
