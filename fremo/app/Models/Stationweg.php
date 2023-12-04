<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationweg extends Model
{
    use HasFactory;

    protected $table = 'stationweg';
    protected $fillable = ['project_id', 'module_id', 'module_naam']; 

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
