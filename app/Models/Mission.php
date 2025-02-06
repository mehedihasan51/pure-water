<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mission extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title','des','image','sort_des','mission_des_id'] ;

    public function MissionDescription(){
        return $this->hasMany(MissionDescription::class);
    }
}
