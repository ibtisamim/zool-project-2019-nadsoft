<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->text('header_image');
            $table->string('slug');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->boolean('status')->default(1); //1:Active 0:Deactive
            $table->boolean('is_trash')->default(0);  //0:no deleted 1:deleted
            $table->bigInteger('parent_id')->nullable()->unsigned();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('categories');
    }
}
