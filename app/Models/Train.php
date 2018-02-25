<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
  protected $fillable = ['train_name','exec_seat', 'bus_seat', 'eco_seat', 'price'];

  protected $table = 'trains';
}
