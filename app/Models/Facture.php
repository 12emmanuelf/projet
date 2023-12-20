<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Ligne_Facture()
    {
        return $this->hasMany(Ligne_Facture::class);

    }
}
