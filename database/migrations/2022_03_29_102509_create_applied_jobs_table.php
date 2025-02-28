<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('job_id');
            $table->string('title',100)->nullable();
            $table->string('first_name',300)->nullable();
            $table->string('sur_name',200)->nullable();
             $table->string('full_name',400)->nullable();
            $table->string('south_african_resident',400)->nullable();
            $table->string('national_id_number',200)->nullable();
            $table->string('home_language',200)->nullable();
            $table->string('gender',100)->nullable();
            $table->string('address',400)->nullable();
            $table->string('country',200)->nullable();
            $table->string('city',200)->nullable();
            $table->string('postal_code',100)->nullable();
            $table->string('address_type',200)->nullable();
            $table->string('province',200)->nullable();
            $table->string('tel_number_home',100)->nullable();
            $table->string('tel_number_work',100)->nullable();
            $table->string('cell_number',100)->nullable();
            $table->string('fax_number',100)->nullable();
            $table->string('email_address',200)->nullable();
            $table->string('annual_package',200)->nullable();
            //$table->string('upload_cv',400)->nullable();
             $table->integer('job_application_status')->default(1)->comment('New -  1 , In Process - 2 , Shortlisted - 3 , Rejected - 4 , Selected - 5');
              $table->text('job_note')->nullable();
            $table->timestamps();
             $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applied_jobs');
    }
}
