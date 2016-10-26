<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataMerchant extends Model
{
      protected $table= "biodata_merchant";

    protected $fillable =['namausaha',
            'paket',
            'kontrak',
            'alamat',
            'hp',
            'email',
            'dari',
            'sampai',
            'logo',
            'status'
];
}
