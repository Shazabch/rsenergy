<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'unit_price',
        'quantity',
        'date',
        'vendor_id'
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
    public function vendor(){
        return $this->belongsTo(vendor::class);
    }
}
