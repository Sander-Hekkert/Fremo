<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam_bezitter',
        'afkorting',
        'nummer_module',
        'naam_thema_module',
        'lengte_1',
        'lengte_2',
        'lengte_3',
        'e_f',
        'hoek',
        'straal',
        'type_eindprofiel_1',
        'type_eindprofiel_2',
        'bovenbouw_rails',
        'opmerkingen_bijzonderheden',
        'aantal_sporen',
        // Voeg hier alle andere velden toe
    ];
}
