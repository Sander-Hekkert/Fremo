<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tijddiagram extends Model
{
    protected $fillable = [
        'projects_id',
        'status',
        // Add other fillable columns as needed
    ];

    // Relationships
    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id');
    }
}
