<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistre extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Livraison()
    {
        return $this->belongsTo(Livraison::class);

    }
}
