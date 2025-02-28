<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_type')->default(1)->comment('user - 1 , admin- 0');
            $table->string('email')->unique();
            $table->string('address',400)->nullable();
            $table->string('phone_number',200)->nullable();
             $table->string('profile_image',300)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
      $adminPassword =   Hash::make('password');
          DB::table('users')->insert(['name' => 'admin',"password" => $adminPassword ,"email" => 'admin@gmail.com',"user_type" => 0,'created_at' => now() ,'updated_at' => now()  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
