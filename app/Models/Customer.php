<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['no_id', 'titel', 'nama_customer', 'telp_customer', ];
}
