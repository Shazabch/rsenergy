<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'employee_id',
        'project_id',
        'notes',
        'amount'
    ];
    public function expense_category(){
      return $this->belongsTo(expense_category::class);
    }
    public function employee(){
      return $this->belongsTo(employee::class);
    }
    public function owner(){
      return $this->belongsTo(owner::class);
    }
}
