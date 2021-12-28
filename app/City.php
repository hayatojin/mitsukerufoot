<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function recruitmentgame()
    {
        return $this->hasMany('App\RecruitmentGame');
    }
}
