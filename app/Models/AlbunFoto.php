<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbunFoto extends Model
{
    use HasFactory;

    public function albunes()
    {
        return $this->belongsToMany(Albun::class);
    }

    public function fotos()
    {
        return $this->belongsToMany(Foto::class);
    }
}
