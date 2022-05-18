<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectInventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity',
        'date',
        'project_id'
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
    public function project(){
        return $this->belongsTo(project::class);
    }
}
