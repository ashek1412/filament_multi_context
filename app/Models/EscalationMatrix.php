<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscalationMatrix extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function escalationdepartment()
    {
        return $this->belongsTo(EscalationDepartment::class,'department_id');
    }
}
