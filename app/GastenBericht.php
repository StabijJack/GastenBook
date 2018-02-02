<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GastenBericht extends Model
{
    protected   $fillable =[
        'name',
        'bericht',
        'email',
        'telefoonnummer',
        'foto',
        'mailsubscriber'
    ];
}
