<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = ['legume_id', 'quantite'];

    public function legume()
    {
        return $this->belongsTo(Legume::class);
    }
}
