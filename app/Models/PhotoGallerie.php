<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoGallerie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'status',
    ];

    public function photoGalleries(){

          return $this->hasMany(PhotoGallerie::class);
    
  }

}
