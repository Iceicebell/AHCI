<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $primaryKey = 'assignment_id';
    protected $fillable =[
        'assignment_name',
        'description',
        'due_date',
        'coord_id',
    ];
}
