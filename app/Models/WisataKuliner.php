<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class WisataKuliner extends Authenticatable

{
    use HasFactory;

    protected $fillable = [
        'nama_tempat',
        'alamat',
        'deskripsi',
        'kategori',
        'gambar'
    ];
}
