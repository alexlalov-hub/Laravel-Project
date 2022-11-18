<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function user(){
        return $this->hasOne(User::class);
    }

    public function facility(){
        return $this->hasOne(Facility::class);
    }

    public function clinic(){
        return $this->hasOne(Clinic::class);
    }
}
