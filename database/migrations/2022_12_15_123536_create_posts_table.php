<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('childcategory_id')->nullable();
            $table->string('post_title')->nullable();
            $table->string('post_slug')->nullable();
            $table->longText('post_description')->nullable();
            $table->string('author_id');
            $table->string('post_date')->nullable();
            $table->boolean('headline')->default('0')->nullable();
            $table->boolean('first_section')->default('0');
            $table->string('first_section_thumbnail')->default('0');
            $table->string('bigthumbnail')->nullable();
            $table->string('image')->default('0');
            $table->string('special_number_image')->default('0')->nullable();
            $table->string('image_thumbnails')->default('0');
            $table->boolean('status')->default('0');
            $table->boolean('special_number_status')->default('0');
            $table->string('author_custom_post_id');
            $table->string('tag_id')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
