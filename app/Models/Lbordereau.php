<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lbordereau extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Colis()
    {
        return $this->belongsTo(Colis::class);
    }
    public function Bordereau()
    {
        return $this->belongsTo(Bordereau::class);

    }
}
