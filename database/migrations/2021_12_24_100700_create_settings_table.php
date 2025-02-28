<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_link',400);
            $table->string('youtube_link',400);
            $table->string('instagram_link',400);
            $table->string('twitter_link',400);
            $table->string('linkedin_link',400);
              $table->string('website_contact_no',50)->nullable();
                $table->string('website_email',100)->nullable();
            $table->string('logo_image',400)->nullable();
            $table->timestamps();
        });
        
        DB::table('settings')->insert(['facebook_link' => 'https://facebook.com',"youtube_link" => 'https://youtube.com',"instagram_link" => 'https://instagram.com',"twitter_link" =>'https://twitter.com',"website_contact_no" =>'0861 664 444',"website_email" =>'sales@trafalgar.co.za',"linkedin_link" =>'https://www.linkedin.com','created_at' => now() ,'updated_at' => now()  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
