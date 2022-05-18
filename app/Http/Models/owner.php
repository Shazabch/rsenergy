<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function payment(){
        return $this->hasMany(payment::class);
    }

    public function expense(){
        return $this->hasMany(expense::class);
    }
}
