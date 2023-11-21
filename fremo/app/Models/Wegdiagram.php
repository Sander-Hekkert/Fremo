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
        'users_id',
        'starttijd',
        'eindtijd',
        'status',
    ];

    // Relationships or additional methods can be defined here
}
