<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MImage extends Model
{
       use HasFactory;

    protected $fillable = [
        'MedicineId',
        'ImagePath',
    ];

    public function medicine (){
        return $this->belongsTo(MMedicine::class,'MedicineId','id');
    }
}
