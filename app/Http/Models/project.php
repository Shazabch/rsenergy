<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'name',
        'start_date',
        'end_date',
        'total_kw',
        'est_price'

    ];
    public function projectInventory(){
    return $this->hasMany(projectInventory::class);
    }

    public function payment(){
        return $this->hasMany(payment::class);
    }

    public function projectPayment(){
        return $this->hasMany(projectPayment::class);
    }
    public function customer(){
        return $this->belongsTo(customer::class)->withDefault();
    }
  
}
