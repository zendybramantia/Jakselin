<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'nohp',
        'username',
        'password',
        'avatar'
    ];

    protected $hidden =[
        'password',
        'is_admin'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
