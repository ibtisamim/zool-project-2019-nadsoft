<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumb');
            $table->string('slug');
            $table->string('sms');
            $table->string('internet');
            $table->string('free_calls');
            $table->string('short_description');
            $table->float('price', 8, 2);
            $table->longText('description');

            $table->boolean('is_trash')->default(0); //0:no deleted 1:deleted
            $table->boolean('status')->default(1); //1:Active 0:Deactive

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
        Schema::dropIfExists('packages');
    }
}
