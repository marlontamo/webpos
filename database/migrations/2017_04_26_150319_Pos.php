<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pos extends Migration
{
    
    public function up()
    {
        Schema::create('Pos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_id',20);
            $table->double('qty',100);
            $table->double('total_per_item',100);
            $table->string('user_id',100);
            $table->string('receipt_code',100);
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
        Schema::dropIfExists('Pos');
    }
}
