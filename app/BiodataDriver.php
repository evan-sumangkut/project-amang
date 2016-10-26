<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataDriver extends Model
{
    protected $table= "biodata_driver";

	protected $fillable =['namalengkap',
	'userid',
            'namapanggilan',
            'driver',
            'jk',
            'tempatlahir',
            'tanggallahir',
            'ktp',
            'sim',
            'alamat',
            'hp',
            'email',
            'bank',
            'norekening',
            'namarekening',
            'jaminan',
            'status',
            'created_at'];

}
