<?php

namespace App\Models;

use App\Models\Train;
use Illuminate\Database\Eloquent\Model;

class Wagon extends Model
{
  protected $fillable = ['train_id', 'class', 'price',];

  protected $table = 'wagons';

  public function train()
  {
    return $this->belongsTo('App\Models\Train');
  }
}
