<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('link');
            $table->boolean('addto_home_slider')->default(0); //1:Active 0:Deactiv
            $table->boolean('is_home_banner')->default(0); //1:Active 0:Deactiv
            $table->boolean('status')->default(1); //1:Active 0:Deactive
            $table->boolean('is_trash')->default(0);  //0:no deleted 1:deleted
            $table->boolean('open_newtab');
            $table->text('image_src');

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
        Schema::dropIfExists('banners');
    }
}
