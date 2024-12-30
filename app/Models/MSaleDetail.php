<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSaleDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'SaleId',
        'MedicineId',
        'Quantity',
        'Price',
    ];
    
    public function medicine (){
        return $this->hasMany(MMecidicine::class,'MedicineId','id');
    }

    public function sale () {
        return $this->hasMany(MSale::class,'SaleId','id');
    }
}