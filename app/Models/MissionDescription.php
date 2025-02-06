<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MissionDescription extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title','sort_des'] ;

    public function Mission(){
        return $this->belongsTo(Mission::class);
    }
}
