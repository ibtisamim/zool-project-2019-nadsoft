<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumb');
            $table->string('slug');
            $table->string('short_description');
            $table->float('price', 8, 2);
            $table->longText('description');
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->bigInteger('brand_id')->nullable()->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('is_trash')->default(0); //0:no deleted 1:deleted
            $table->boolean('status')->default(1); //1:Active 0:Deactive
            $table->boolean('approved')->default(0); //1:Active 0:Deactive
            $table->boolean('is_new')->default(0); //1:Active 0:Deactive
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
        Schema::dropIfExists('products');
    }
}
