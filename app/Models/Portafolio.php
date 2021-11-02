<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;
    protected $table ="portafolios";
    protected $fillable=['id','imagen'];

    protected $appends = ['imagenes'];

    public function getimagenesAttribute()
    {
       return "/images/portfolio/{$this->imagen}";
    }
}
