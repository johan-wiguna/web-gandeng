<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('position_id')->primary();
            $table->unsignedInteger('person_id');
            $table->unsignedInteger('department_id')->nullable();
            $table->string('position_name',50);
            $table->timestamps();

            $table->foreign('person_id')
                ->references('person_id')
                ->on('persons');
            
            $table->foreign('department_id')
                ->references('department_id')
                ->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
