<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Depots extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'adresse', 'capacite', 'code_postal', 'ville', 'longitude', 'latitude'];

    /**
     * Relation many-to-many avec Tournee
     */
    public function tournees(): BelongsToMany
    {
        return $this->belongsToMany(Tournee::class, 'depot_tournee')
                    ->withPivot('ordre')
                    ->withTimestamps()
                    ->orderByPivot('ordre');
    }
}
