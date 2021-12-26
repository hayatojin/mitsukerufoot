<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//モデルの作成
class RecruitmentGame extends Model
{
    //hasMany設定
  public function prefecture()
  {
  return $this->belongsto('App\Prefecture');
  }
}
