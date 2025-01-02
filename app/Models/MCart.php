<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCart extends Model
{
    use HasFactory;

    protected $table = 'tblCarts';

    protected $fillable = [
        'MedicineId',
        'Quantity',
    ];
    public function medicine (){
        return $this->belongsTo(MMedicine::class,'MedicineId', 'id');
    }
}
