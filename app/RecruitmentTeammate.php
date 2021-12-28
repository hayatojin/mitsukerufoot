<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitmentTeammate extends Model
{
    public function prefecture()
  {
    return $this->belongsto('App\Prefecture','prefecture_id');
  }
  
  public function position()
  {
    return $this->belongsto('App\Positon','position1_id');
  }
}
