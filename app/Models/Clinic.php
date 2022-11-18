<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use HasFactory, SoftDeletes;

    public function facilities(){
        return $this->hasMany(Facility::class);
    }

    public function doctors(){
        return $this->belongsToMany(Doctor::class, 'clinic_doctors');
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
