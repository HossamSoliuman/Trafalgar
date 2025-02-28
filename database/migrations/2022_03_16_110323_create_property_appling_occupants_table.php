<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyApplingOccupantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_appling_occupants', function (Blueprint $table) {
            $table->id();
             $table->string('property_applying_form_id',200)->nullable();
             $table->string('occupants_no_of_person_occupy_unit',200)->nullable();
              $table->string('occupants_id_no',200)->nullable();
             $table->string('occupants_gender',200)->nullable();
              $table->string('occupants_title',400)->nullable();
             $table->string('occupants_name',400)->nullable();
              $table->string('occupants_surname',200)->nullable();
             $table->string('occupants_cell_no',200)->nullable();
                $table->string('occupants_work_tel_no',200)->nullable();
             $table->string('occupants_email',200)->nullable();
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
        Schema::dropIfExists('property_appling_occupants');
    }
}
