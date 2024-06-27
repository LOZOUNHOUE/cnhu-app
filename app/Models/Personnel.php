<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'rôle',
        // Ajoutez d'autres colonnes si nécessaire
    ];

    // Vous pouvez ajouter des relations ici, par exemple :
    // public function departement()
    // {
    //     return $this->belongsTo(Departement::class);
    // }
}
