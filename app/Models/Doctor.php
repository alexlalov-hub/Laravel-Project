<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function facilities(){
        return $this->hasMany(Facility::class);
    }

    public function clinics(){
        return $this->hasMany(Clinic::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function specilizations(){
        return $this->belongsToMany(Specialization::class, 'role_user');
    }
}
