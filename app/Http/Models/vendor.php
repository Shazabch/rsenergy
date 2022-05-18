<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'notes'
    ];
    public function purchase(){
        return $this->hasMany(purchase::class);
    }
}
