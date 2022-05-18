<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount'
    ];
    public function project(){
        return $this->belongsTo(project::class);
    }
}
