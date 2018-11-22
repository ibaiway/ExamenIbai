<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function hoteles()
        {
            return $this->belongsToMany('App\Hotel')->withPivot('fecha', 'numhabitaciones');
        }
}
