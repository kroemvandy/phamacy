<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCategory extends Model
{
    use HasFactory;

    protected $table = 'tblCategories';

    protected $fillable = [
        'CategoryName',
    ];

    public function medicine(){
        return $this->hasMany(MMedicines::class,'CategoryId','id');
    }
}
