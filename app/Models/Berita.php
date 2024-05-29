<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['isi_berita','tanggal_dan_waktu','id_kategori','status','image'];
    protected $visible = ['isi_berita','tanggal_dan_waktu','id_kategori','status','image'];

    public function penulis ()
    {
        return $this->belongsTo(Penulis::class,'id_penulis');
    }
    public function kategori ()
{
    return $this->belongsTo(Kategori::class,'id_kategori');
}
}
