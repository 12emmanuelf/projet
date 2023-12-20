<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable=['nom','prix'];



    public function Abonnemet()
    {
        return $this->belongsTo(Abonnement::class);

    }

    public function Client()
    {
        return $this->belongsTo(Client::class);

    }

    public function Dossier()
    {
        return $this->hasMany(Dossier::class);
    }

    public function Souscription()
    {
        return $this->hasMany(Souscription::class);
    }

}
