<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('top_hero_image')->nullable();
            $table->string('top_hero_image_alt')->nullable();
            $table->string('top_hero_headline')->nullable();
            $table->text('top_hero_subline')->nullable();
            $table->string('featured_tab_headline')->nullable();
            $table->string('featured_tab_subline')->nullable();
            $table->string('featured_tab_cta')->nullable();
            $table->string('featured_tab_cta_link')->nullable();
            $table->string('paralax_bad_image')->nullable();
            $table->string('paralax_bad_image_alt')->nullable();
            $table->string('paralax_good_image')->nullable();
            $table->string('paralax_good_image_alt')->nullable();
            $table->text('paralax_text')->nullable();
            $table->string('paralax_cta')->nullable();
            $table->string('paralax_cta_link')->nullable();
            $table->string('all_products_headline')->nullable();
            $table->text('all_products_subline')->nullable();
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
        Schema::dropIfExists('home_pages');
    }
}
