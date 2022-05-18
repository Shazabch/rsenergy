<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'payment_type',
        'project_id',
        'owner_id',
        'notes'
    ];
    public function owner(){
        return $this->belongsTo(owner::class);
    }
    public function project(){
        return $this->belongsTo(project::class);
    }
}
