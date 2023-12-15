<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    use HasFactory;
    protected $primaryKey = 'univ_id';
    protected $fillable =[
        'univ_name',
        'image'
    ];
}
