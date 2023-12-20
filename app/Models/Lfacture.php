<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lfacture extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Facture()
    {
        return $this->belongsTo(Facture::class);

    }

    public function Tarification()
    {
        return $this->belongsTo(Tarification::class);

    }
}
