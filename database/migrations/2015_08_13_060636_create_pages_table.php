<?php

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
            $table->string('subtitle');
            $table->string('title');
            $table->string('page_image');
            $table->string('slug')->unique();
            $table->string('layout')->default('blog.layouts.post');
            $table->integer('category_id')->nullable();
            $table->boolean('is_draft');
            $table->string('meta_description');
            $table->timestamp('published_at')->index()->nullableTimestamp();
            $table->text('content_html')->nullable();
            $table->text('content_raw')->nullable();
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
        Schema::drop('pages');
    }
}
