<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'category_id', 'source'
    ];

    public function category(){
        return $this->belongsTo(CoffeeCategory::class, 'id');
    }
}
