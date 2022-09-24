<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainees() {
        return $this->hasMany('App\Models\Trainee');
    }

    public function trainors() {
        return $this->belongsTo('App\Models\Trainor');
    }
}
