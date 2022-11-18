<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use HasFactory, SoftDeletes;

    public function clinics(){
        return $this->belongsTo(Clinic::class);
    }

    public function doctor(){
        return $this->hasOne(Doctor::class);
    }
}
