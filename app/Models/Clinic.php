<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

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
