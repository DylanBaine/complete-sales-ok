<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('is_on_menu');
            $table->string('is_public');
            $table->string('name');
            $table->string('slug');
            $table->string('header_image')->nullable();
            $table->string('type'); //ex: About, Contact Us, Special Promo, Generic
            $table->string('header_title');
            $table->text('content');
            $table->string('featured_item_name')->nullable();
            $table->string('featured_item_image')->nullable();
            $table->text('featured_item_description')->nullable();
            $table->string('featured_item_slug')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
