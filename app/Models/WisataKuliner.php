<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class WisataKuliner extends Model

{
    use HasFactory;

    protected $fillable = [
        'nama_tempat',
        'category_id',
        'alamat',
        'deskripsi',
        'gambar'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
