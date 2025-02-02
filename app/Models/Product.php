<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'category',
        'feature_image'
    ];



    public function category(){
        return $this->belongsTo(Categorie::class);
    }

    public function product(){

   
     return $this->belongsTo(Product::class);


    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
