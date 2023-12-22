<?php

namespace App\Models;

use App\Models\Dossier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commune extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function Zone()
    {
        return $this->hasMany(Zone::class);
    }

    public function Client()
    {
        return $this->belongsTo(Ville::class);
    }
}
