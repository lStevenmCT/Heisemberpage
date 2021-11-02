<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table="banners";
    protected $fillable =['id','title','banner'];

    protected $appends = ['Imagen'];
    public function getImagenAttribute()
    {
       return "/images/slider/{$this->banner}";
    }
}
