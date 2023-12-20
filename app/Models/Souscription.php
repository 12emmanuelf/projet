<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{
    use HasFactory;
    protected $fillable = ['client_nom', 'client_email','date_debut', 'date_fin', 'abonnement_id', 'client_id', 'montant_paye', 'statut'];

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
