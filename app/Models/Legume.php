<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Legume extends Model
{
    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }
}
