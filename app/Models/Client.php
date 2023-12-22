<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
    ];

    // public function Zone()
    // {
    //     return $this->belongsTo(Zone::class);
    // }

    public function Dossier()
    {
        return $this->hasMany(Dossier::class);
    }

    public function Commune()
    {
        return $this->hasMany(Commune::class);
    }
}
