<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'brand_name',
        'category_id',
        'unit_type'
    ];
    public function product_category(){
        return $this->belongsTo(product_category::class);
      }
      
    public function purchase(){
    return $this->hasMany(purchase::class);
      }

    public function projectInventory(){
    return $this->hasMany(projectInventory::class);
      }
}
