<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfotrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infotrucks', function (Blueprint $table) {
            $table->increments('id');

            $table->string('pname');
            $table->string('contact');
            $table->string('address');

            $table->string('truckno');

            $table->string('color');
            $table->string('wheels');
    
            $table->string('place');
            $table->string('booking');
            $table->string('present');
            $table->string('curid');
            $table->string('curdate');

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
        Schema::dropIfExists('infotrucks');
    }
}
