<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'rating',
        'review',
        'status',
    ];

    /**
     * Relationship: Review belongs to a Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
