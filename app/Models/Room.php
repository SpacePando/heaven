<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  // protected $table = 'table_name';
  protected $casts = [
    'Needs' => 'array'
  ];
}
