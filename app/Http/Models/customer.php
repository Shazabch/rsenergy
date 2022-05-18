<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile',
        'address',
        'cnic'
    ];
    public function project(){
        return $this->hasMany(project::class);
    }
}
