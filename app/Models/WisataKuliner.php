<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class WisataKuliner extends Authenticatable

{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'nama_tempat',
        'alamat',
        'deskripsi',
        'id_kategori',
        'gambar'
    ];
}
