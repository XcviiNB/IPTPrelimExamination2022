<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function trainees() {
        return $this->hasMany('App\Models\Trainee');
    }

    public function trainors() {
        return $this->hasMany('App\Models\Trainor');
    }
}
