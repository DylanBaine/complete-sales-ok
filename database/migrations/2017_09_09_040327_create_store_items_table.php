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
            $table->text('description');
            $table->string('price');
            $table->string('brand');
            $table->string('stock');
            $table->string('main_image');
            $table->string('second_image');
            $table->string('third_image');
            $table->string('fourth_image');
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
