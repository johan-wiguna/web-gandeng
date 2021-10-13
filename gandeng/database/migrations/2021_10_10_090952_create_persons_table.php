<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('person_id')->primary();
            $table->string('name', 50);
            $table->string('nickname', 50)->nullable();
            $table->binary('gender');
            $table->string('email', 50)->nullable();
            $table->string('address', 50)->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone_number',20)->nullable();
            $table->string('line_id',50)->nullable();
            $table->string('instagram_id',50)->nullable();
            $table->string('linkedin_url',200)->nullable();
            $table->string('profile_picture',200)->nullable();
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
        Schema::dropIfExists('persons');
    }
}
