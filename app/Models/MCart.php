<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCart extends Model
{
        use HasFactory;

    protected $fillable = [
        'MedicineId',
        'Quantity',
    ];
    public function Medicine (){
        return $this->belongsTo(MMedicines::class,'MedicineId', 'id');
    }
}
