<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    public function users(){
        return $this->belongsToMany(User::class, 'doctor_users');
    }

    public function facilities(){
        return $this->hasMany(Facility::class);
    }

    public function clinics(){
        return $this->belongsToMany(Clinic::class, 'clinic_doctors');
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function specilizations(){
        return $this->belongsToMany(Specialization::class, 'role_user');
    }
}
