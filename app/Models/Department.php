<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $table='departments';
    protected $primaryKey = 'dept_id';
    protected $fillable=['dept_id','dept_name','desc','MGRSSN','deptImage'];
}
