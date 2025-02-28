<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedJobDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_job_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applied_job_id');
             $table->string('document_link',400);
             $table->foreign('applied_job_id')->references('id')->on('applied_jobs')->onDelete('cascade');
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
        Schema::dropIfExists('applied_job_documents');
    }
}
