<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Doctor extends Model
{
    use HasFactory, SoftDeletes, HasRoles;

    protected $guard_name = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'address',
        'city',
        'country',
        'postal',
        'about'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function facilities(){
        return $this->hasMany(Facility::class);
    }

    public function clinics(){
        return $this->belongsToMany(Clinic::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function specilizations(){
        return $this->belongsToMany(Specialization::class, 'role_user');
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
