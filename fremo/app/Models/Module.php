<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam_bezitter',
        'naam_module' ,
        'nummer_module',
        'e_f',
        'hoek',
        'opmerkingen_bijzonderheden',
        'aantal_sporen_begin',
        'aantal_sporen_eind',
    ];
}
