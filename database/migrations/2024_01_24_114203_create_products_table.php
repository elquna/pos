<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id');
            $table->integer('branch_id')->nullable();
            $table->string('name')->nullable();
            $table->string('added_by')->nullable();
            $table->unsignedInteger('price');
            $table->integer('remaining')->default(0);
            $table->string('slug');
            $table->string('qr');
            $table->string('trashed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
