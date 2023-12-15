<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $primaryKey = 'proj_id';
    protected $fillable =[
        'proj_name',
        'image',
        'coordinator'
    ];
    public function coordinator()
{
    return $this->belongsTo(User::class, 'coord_id');
}
}
