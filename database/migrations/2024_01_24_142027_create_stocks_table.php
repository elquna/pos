<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('type')->default('credit')->comment('credit or debit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
