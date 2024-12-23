<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSale extends Model
{
     use HasFactory;

    protected $fillable = [
        'CustomerPhone',
        'TotalAmount',
    ];

    public function SaleDetail()
    {
        return $this->belongsToMany(MSaleDetail::class,'SaleId','id');
    }


}
