<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title',500)->nullable();
             $table->string('job_title_slug',500)->nullable();
            $table->text('job_description')->nullable();
            $table->string('job_location',300)->nullable();
            $table->string('job_type',300)->default(1)->comment(' 1 - Full Time , 2 - Part Time');;
            $table->integer('no_of_position')->default(1);
            $table->string('hr_email',300)->nullable();
             $table->integer('job_status')->default(0)->comment(' 1 - active job , 0 - inactive job');
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
        Schema::dropIfExists('jobs');
    }
}
