<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positon extends Model
{
    public function recruitment()
  {
  return $this->hasMany('App\RecruitmentTeammate');
  }
}
