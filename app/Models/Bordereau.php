<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Livraison()
    {
        return $this->belongsTo(Livraison::class);

    }

    public function LBordereau()
    {
        return $this->hasMany(LBordereau::class);

    }

    public function Coursier()
    {
        return $this->belongsTo(Coursier::class);

    }

}
