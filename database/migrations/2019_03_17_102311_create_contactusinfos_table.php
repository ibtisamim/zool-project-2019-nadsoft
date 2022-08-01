<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactusinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactusinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('address_1');
            $table->string('fax')->nullable();
            $table->string('email');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('contactus_email')->nullable();
            $table->text('notes')->nullable();
            $table->string('slug');
            $table->string('whatsup')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();

            $table->boolean('is_trash')->default(0);  //0:no deleted 1:deleted
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
        Schema::dropIfExists('contactusinfos');
    }
}
