<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    // Define the table associated with the model (optional, only if the table name is different)
    protected $table = 'contacts';

    // Specify which fields are mass assignable
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'city',
        'postal_code',
        'house_address',
        'option',
        'interested_in',
        'problems',
        'note',
        'images',
    ];
    protected $casts = [
        'option'=>'array',
        'interested_in' => 'array',
        'problems'=> 'array',
        'images' => 'array',
    ];


    // Optionally, you can define date fields (for soft deletes, created_at, updated_at)
    protected $dates = [
        'deleted_at', // for soft deletes
    ];
}
