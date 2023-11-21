<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'users_id',
        'datum_en_tijd_aangemaakt',
        'status',
    ];

    // Definieer de relatie met de gebruiker
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
