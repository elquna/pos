<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cartsession')->unique();
            $table->unsignedInteger('subtotal')->nullable();
            $table->string('paymethod')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('customer_name')->nullable();
            $table->integer('tax')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('branch_id')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
