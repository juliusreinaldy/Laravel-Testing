<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_data',function (Blueprint $table) {
            $table-> increments('id');
            $table-> set('barcode',['1111','1122']);
            $table-> set('product_name',['APPLE','PINEAPPLE']);
            $table-> float('price',6,2);
            $table-> set('status',['READY','DELIVERED','SENT','PACKING','ONHOLD']);
            $table-> timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_data');
    }
}
