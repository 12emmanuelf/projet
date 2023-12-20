<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Dossier()
    {
        return $this->belongsTo(Dossier::class);

    }

    public function Ligne_Facture()
    {
        return $this->hasMany(Ligne_Facture::class);

    }
}
