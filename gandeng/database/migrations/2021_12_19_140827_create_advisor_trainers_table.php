<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisor_trainers', function (Blueprint $table) {
            $table->id('adv_tra_id');
            $table->timestamps();
            $table->string('name', 50);
            $table->string('instagram_id',50)->nullable();
            $table->string('linkedin_url',200)->nullable();
            $table->string('profile_picture',200)->nullable();
            $table->string('ngo_se',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advisor_trainers');
    }
}
