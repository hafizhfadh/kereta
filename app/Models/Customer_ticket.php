<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_ticket extends Model
{
    protected $fillable = ['id','id_booking','remember_token'];

    public function booking()
    {
        return $this->hasOne('App\Models\Booking', 'id', 'id_booking');
    }
}
