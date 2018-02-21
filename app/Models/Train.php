<?php

namespace App\Models;

use App\Models\Wagon;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
  protected $fillable = ['train_name',];

  protected $table = 'trains';

  public function wagons()
  {
    return $this->hasMany('App\Models\Wagon', 'train_id', 'id');
  }
}
