<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function wisatakuliner()
    {
        return $this->hasMany(WisataKuliner::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
             $category->wisatakuliner()->each(function($wisatakuliner){
                $wisatakuliner->delete();
                // WisataKuliner::deleting($wisatakuliner);
             });
        });
    }

}
