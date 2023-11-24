<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tijddiagram extends Model
{
    protected $fillable = [
        'projects_id',
        'status',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
