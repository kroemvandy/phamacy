<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMedicine extends Model
{
    use HasFactory;

    protected $table = "tblMedicines";

    protected $fillable = [
        'MedicineName',
        'MedicineDescription',
        'Price',
        'Qty',
        'CategoryId',
        'ExpDate',
        'Image',
    ];

    public function category()
    {
        return $this->belongsTo(MCategory::class,'CategoryId','id');
    }

    public function cart () {
        return $this->hasMany(MCart::class,'MedicineId','id');
    }

    public function image()
    {
        return $this->hasMany(MImage::class,'MedicineId','id');
    }

    public function saleDetail (){
        return $this->belongsToMany(MSaleDetail::class,'MedicineId','id');
    }
}
