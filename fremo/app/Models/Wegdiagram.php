<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wegdiagram extends Model
{
    use HasFactory;

    protected $table = 'wegdiagram';

    protected $fillable = [
        'projects_id',
        'starttijd',
        'eindtijd',
        'status',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }}
