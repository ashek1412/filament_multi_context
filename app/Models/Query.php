<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\ErrorHandler\Error\UndefinedFunctionError;

class Query extends Model
{
    use HasFactory;

    protected $fillable = [
        'query_type_id',
        'department_id',
        'tracking_no',
        'description',
        'customer_name',
        'phone',
        'status',
        'created_by'
    ];

    public function escalationdepartment()
    {
        return $this->belongsTo(EscalationDepartment::class,'department_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function querytype()
    {
        return $this->belongsTo(QueryType::class,'query_type_id');
    }
}
