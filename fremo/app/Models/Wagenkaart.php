<?php

// app/Models/Wagenkaart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wagenkaart extends Model
{
    protected $fillable = [
        'Eigenaarsnaam',
        'naam',
        'nummer_module',
        'e_f',
        'opmerkingen_bijzonderheden',
        'uic_typ',
        'Beschrijving',
        'Lengte',
        'Asafstand',
        'Nuttige_Lading',
        'Ladelengte',
        'Ladeflak',
        'Lade_instructies',
        'Modelaanduiding',
        'Modelkenmerken',
        'Eigenaar',
        'Fabrikant',
        'Wielstellen',
        'Koppelingen',
        'Veerpuffer',
        'Model_lengte',
        'Modelgewicht',
        'Bouwjaar',
    ];
}
