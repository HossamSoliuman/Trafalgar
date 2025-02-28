<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEntegralApiDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entegral_api_data', function (Blueprint $table) {
           
            $table->id();
$table->string('property_id',300)->nullable();
$table->string('mandate_saletype',300)->nullable();
$table->string('mandate_saletypeunit',300)->nullable();
$table->string('mandate_status',300)->nullable();
$table->string('mandate_type',300)->nullable();
$table->string('mandate_startdate',300)->nullable();
$table->string('mandate_enddate',300)->nullable();
$table->integer('price')->nullable();
$table->string('property_classification',300)->nullable();
$table->string('property_type',300)->nullable();
$table->string('photo_thumbnail',300)->nullable();
$table->string('news_featured_image',500)->nullable();
$table->string('country',300)->nullable();
$table->string('province',300)->nullable();
$table->string('town',300)->nullable();
$table->string('suburb',300)->nullable();
$table->string('map_location_available',300)->nullable();
$table->string('street_number',300)->nullable();
$table->string('street_name',300)->nullable();
$table->string('unit_number',300)->nullable();
$table->string('complex_name',300)->nullable();
$table->integer('agent_id')->nullable();
$table->string('agent_name',500)->nullable();
$table->string('added',300)->nullable();
$table->string('updated',300)->nullable();
$table->string('location_lat',300)->nullable();
$table->string('location_long',300)->nullable();
$table->integer('floor_size')->nullable();
$table->string('floor_size_unit',300)->nullable();
$table->integer('land_size')->nullable();
$table->string('land_size_unit',300)->nullable();
$table->string('pool',300)->nullable();
$table->string('no_pets_allowed',300)->nullable();
$table->integer('garages')->nullable();
$table->string('covered_parking',300)->nullable();
$table->string('open_parking',300)->nullable();
$table->integer('bedrooms')->nullable();
$table->integer('bathrooms')->nullable();
$table->string('furnished',300)->nullable();
$table->string('living_areas',300)->nullable();
$table->string('days_on_market',300)->nullable();
$table->string('days_to_expiry',300)->nullable();
$table->string('headline',300)->nullable();
$table->text('description')->nullable();
$table->string('rates_taxes',300)->nullable();
$table->string('rates_taxes_unit',300)->nullable();
$table->string('levy',300)->nullable();
$table->string('levy_unit',300)->nullable();
$table->string('photos',300)->nullable();
$table->string('contacts',300)->nullable();
$table->string('features',300)->nullable();
$table->string('files',300)->nullable();
$table->string('links',300)->nullable();
$table->string('api_city_key',300)->nullable();
$table->string('api_type_name',300)->nullable()->comment('which api is called');
$table->integer('is_property_new')->default(0)->comment('0 - old property , 1 - new property');
$table->integer('is_property_sold')->default(0)->comment('0 - not sold , 1 - sold');

$table->string('separate_toilet')->nullable();
$table->string('additional_charges')->nullable();
$table->string('security_tag')->nullable();
$table->string('staff_tag')->nullable();
$table->string('study_tag')->nullable();
$table->string('carpeted_tag')->nullable();
$table->string('video_url')->nullable();


$table->timestamps();
        });
        
        DB::statement('ALTER TABLE entegral_api_data ADD FULLTEXT search(suburb, town,province)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entegral_api_data');
    }
}
