<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'username',
        'password'
    ];

    protected $hidden =[
        'password',
        'is_admin'
    ];
}
