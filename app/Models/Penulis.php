<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    public function berita ()
{
    return $this->belongsTo(Berita::class,'id_berita');
}
}
