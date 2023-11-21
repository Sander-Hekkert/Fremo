<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wegdiagram extends Model
{
    use HasFactory;

    protected $table = 'wegdiagram';

    protected $fillable = [
        'project_id',
        'starttijd',
        'eindtijd',
        'status',
        'treinweg_id',
        'stationweg_id',
    ];

    // Relationships or additional methods can be defined here
}
