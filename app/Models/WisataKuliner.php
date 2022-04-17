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

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nama_tempat', 'like', '%' . $search. '%')
            ->orWhere('alamat', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });
    }

<<<<<<< HEAD
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
=======
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }



>>>>>>> c1268210def7d00e4e6b4311aad7f8f125967a9a
}
