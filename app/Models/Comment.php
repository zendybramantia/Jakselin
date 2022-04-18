<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'kuliner_id',
        'user_id',
        'body'
    ];

    public function WisataKuliner()
    {
        return $this->belongsTo(WisataKuliner::class, 'kuliner_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
