<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Bordereau()
    {
        return $this->hasMany(Bordereau::class);

    }
    public function Sinistre()
    {
        return $this->hasMany(Sinistre::class);

    }
}
