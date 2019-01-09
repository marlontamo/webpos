<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_header', function (Blueprint $table) {
            $table->string('order_number',20);
            $table->string('order_client',100);
            $table->decimal('net_amount', 20, 2);
            $table->decimal('tax_amount', 20, 2);
            $table->decimal('gross_amount', 20, 2);
            $table->enum(
                'status',
                array(
                    'pending',
                    'paid',
                    'hold',
                    'cancelled'
                )
            );
            $table->primary('order_number');
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
        Schema::dropIfExists('order_header');
    }
}
