<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'MedicineName',
        'MedicineDescription',
        'Price',
        'Qty',
        'CategoryId',
        'ExpDate',
    ];

    public function Category()
    {
        return $this->belongsTo(MCategory::class,'CategoryId','id');
    }

    public function Carts () {
        return $this->hasMany(MCart::class,'MedicinceId','id');
    }

    public function Image()
    {
        return $this->hasMany(MImage::class,'MedicinceId','id');
    }

    public function SaleDetail (){
        return $this->belongsToMany(MSaleDetail::class,'MedicineId','id');
    }
}
