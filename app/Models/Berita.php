<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'beritas';
    protected $fillable = [
        'judul',
        'ringkasan',
        'isi',
        'penulis',
        'tanggal',
        'jumlah_like',
        'gambar',
        'kategori_berita_id',
    ];

    public function kategoriBerita()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id');
    }

}
