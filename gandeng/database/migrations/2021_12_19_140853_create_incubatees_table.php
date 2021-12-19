<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncubateesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incubatees', function (Blueprint $table) {
            $table->id('incubatees_id');
            $table->timestamps();
            $table->string('name', 50);
            $table->string('profile_picture',200)->nullable();
            $table->string('ngo_se',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incubatees');
    }
}
