<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtDriver extends Model
{
    protected $connection = 'mysql_external';
    protected $table = 'driver';

    protected $fillable = ['userid',
    'email',
    'password','name','phone','gender','picture','collateral','date_join',
    'type'];
    
    public $timestamps = false;  

    public function ke_ExtDriverIncome()
    {
    	return $this->hasOne('App\ExtDriverIncome','userid','userid');
    }
}
