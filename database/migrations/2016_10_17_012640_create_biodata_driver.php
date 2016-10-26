<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataDriver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_driver', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namalengkap',30);
            $table->string('namapanggilan',10);
            $table->string('driver',5);
            $table->string('jk',9);
            $table->string('tempatlahir',25);
            $table->string('tanggallahir',17);
            $table->string('ktp',16);
            $table->string('sim',12);
            $table->string('alamat',120);
            $table->string('hp',14);
            $table->string('email',30);
            $table->string('bank',7);
            $table->string('norekening',30);
            $table->string('namarekening',30);
            $table->string('jaminan',7);
            $table->string('status',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_driver');
    }
}
