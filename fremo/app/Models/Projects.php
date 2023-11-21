<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'users_id',
        'datum_en_tijd_aangemaakt',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
