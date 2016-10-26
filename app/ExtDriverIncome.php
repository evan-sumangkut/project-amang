<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtDriverIncome extends Model
{
   protected $connection = 'mysql_external';
    protected $table = 'driver_income';

    protected $fillable = ['credit','userid','date_update'];

     public $timestamps = false;  
}
