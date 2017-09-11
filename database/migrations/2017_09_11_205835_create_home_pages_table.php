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
            $table->string('top_hero_image');
            $table->string('top_hero_image_alt');
            $table->string('top_hero_headline');
            $table->text('top_hero_subline');
            $table->string('featured_tab_headline');
            $table->string('featured_tab_subline');
            $table->string('featured_tab_cta');
            $table->string('featured_tab_cta_link');
            $table->string('paralax_bad_image');
            $table->string('paralax_bad_image_alt');
            $table->string('paralax_good_image');
            $table->string('paralax_good_image_alt');
            $table->text('paralax_text');
            $table->string('paralax_cta');
            $table->string('paralax_cta_link');
            $table->string('all_products_headline');
            $table->text('all_products_subline');
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
