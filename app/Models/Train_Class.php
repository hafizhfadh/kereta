<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train_Class extends Model
{
    protected $table = 'train__classes';

    public function train()
    {
        return $this->belongsTo('App\Models\Train');
    }
}
