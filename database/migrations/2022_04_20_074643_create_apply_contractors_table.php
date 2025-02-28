<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_contractors', function (Blueprint $table) {
            $table->id();
            $table->string('business_name',400)->nullable();
            $table->string('business_address',400)->nullable();
            $table->string('business_website',300)->nullable();
            $table->string('business_profile_brochure',400)->nullable();
            $table->string('telephone',200)->nullable();
            $table->string('contact_person_name',200)->nullable();
            $table->string('contact_person_cell',200)->nullable();
            $table->string('contact_person_email',200)->nullable();
            $table->string('maintenance_services_offered',400)->nullable();
            $table->string('areas_covered_province',300)->nullable();
            $table->string('areas_covered_suburbs',300)->nullable();
            $table->text('accreditations')->nullable();
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
        Schema::dropIfExists('apply_contractors');
    }
}
