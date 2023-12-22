<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'groupe'];
    public function Commune()
    {
        return $this->belongsTo(Commune::class);
    }

    // public function Client()
    // {
    //     return $this->hasMany(Client::class);
    // }
}
