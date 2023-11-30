<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationweg extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'module_id',
        'module_naam',
    ];


}
