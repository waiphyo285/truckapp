<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achieves', function (Blueprint $table) {
            $table->increments('id');

            $table->date('estimate_date');
            $table->string('truckno');
            $table->string('start_place');

            $table->string('t_amount');
            $table->string('g_amount');

            $table->string('destinate_place');
            $table->string('finish');
            
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
        Schema::dropIfExists('achieves');
    }
}
