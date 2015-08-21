<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('category_name', 60)->primary();
            $table->string('category_description', 500);
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->string('post_name', 255)->primary();
            $table->string('post_category', 255);
            $table->integer('post_date');
            $table->string('post_preview', 500);
            $table->string('post_body', 10000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
        Schema::drop('posts');
    }
}
