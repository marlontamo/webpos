<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->string('order_number',20);
            $table->integer('line_number');
            $table->string('item',100);
            $table->decimal('quantity', 20, 2);
            $table->decimal('price', 20, 2);
            $table->decimal('amount', 20, 2);
            $table->primary(
                array(
                    'order_number',
                    'line_number'
                )
            );
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
        Schema::dropIfExists('order_detail');
    }
}
