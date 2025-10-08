<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournee extends Model
{
    protected $fillable = [
        'nom',
        'date_tournee',
        'heure_depart',
        'statut',
        'remarques'
    ];

    protected $casts = [
        'date_tournee' => 'date',
        'heure_depart' => 'datetime',
    ];

    // Relation many-to-many avec Depot
    public function depots()
    {
        return $this->belongsToMany(Depot::class)
                    ->withPivot('ordre')
                    ->orderBy('ordre');
    }
}