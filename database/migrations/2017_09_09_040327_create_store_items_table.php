<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('slug');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('brand')->nullable();
            $table->string('stock')->nullable();
            $table->string('main_image');
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->string('fourth_image')->nullable();
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
        Schema::dropIfExists('store_items');
    }
}
