<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'email', 'numero_telephone', 'numero_permis_conduire',
        'type_vehicule', 'plaque_immatriculation', 'statut',
        'date_embauche', 'salaire','nationalite', 'photo',
    ];

    public function Zone()
    {
        return $this->belongsTo(Zone::class);

    }

    public function Bordereau()
    {
        return $this->hasMany(Bordereau::class);

    }
}
