<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function coffees(){
        return $this->hasMany(Coffee::class, 'category_id');
    }
}
