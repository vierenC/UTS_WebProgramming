<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "coffee_id"
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function coffee(){
        return $this->belongsTo(Coffee::class, 'coffee_id');
    }
}