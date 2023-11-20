<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trein extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam_bezitter',
        'afkorting',
        'nummer_trein',
        'code_trein',
        'omschrijving',
        'snelheid',
    ];
}
