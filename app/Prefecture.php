<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    //hasMany設定
  public function recruitmentgame()
  {
    return $this->hasMany('App\RecruitmentGame','App\RecruitmentTeammate');
  }
}
