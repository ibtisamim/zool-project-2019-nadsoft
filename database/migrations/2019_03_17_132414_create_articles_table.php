<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->longText('description');
            $table->bigInteger('category_id')->unsigned();
            $table->text('thumb')->nullable();
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->boolean('is_trash')->default(0); //0:no deleted 1:deleted
            $table->boolean('status')->default(1); //1:Active 0:Deactive
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->index('id');
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
        Schema::dropIfExists('articles');
    }
}
