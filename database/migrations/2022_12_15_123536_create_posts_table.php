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
            $table->string('category_id')->nullable();
            $table->string('subcategory_id')->nullable();
            $table->string('childcategory_id')->nullable();
            $table->string('post_title')->nullable();
            $table->string('post_slug')->nullable();
            $table->string('post_description')->nullable();
            $table->string('user_id');
            $table->string('post_date')->nullable();
            $table->string('post_month')->nullable();
            $table->string('tag_id');
            $table->string('headline')->nullable();
            $table->string('first_section')->nullable();
            $table->string('first_section_thumbnail')->nullable();
            $table->string('bigthumbnail')->nullable();

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
