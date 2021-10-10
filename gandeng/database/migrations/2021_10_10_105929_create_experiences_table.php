<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('experience_id')->primary();
            $table->unsignedInteger('person_id');
            $table->unsignedInteger('company_id');
            $table->string('job_title', 50);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->foreign('person_id')
                ->references('person_id')
                ->on('persons');
            
            $table->foreign('company_id')
                ->references('company_id')
                ->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
