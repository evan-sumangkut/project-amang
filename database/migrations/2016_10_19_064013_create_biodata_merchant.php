<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataMerchant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_merchant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namausaha',40);
            $table->string('paket',5);
            $table->string('kontrak',1);
            $table->string('alamat',120);
            $table->string('hp',14);
            $table->string('email',30);
            $table->string('dari',5);
            $table->string('sampai',5);
            $table->string('logo',100);
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
        Schema::dropIfExists('biodata_merchant');
    }
}
