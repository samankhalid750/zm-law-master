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
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            $table->string('app_name')->nullable();

            $table->string('app_main_heading')->nullable();
            $table->string('app_sub_heading')->nullable();

            $table->string('about_main_heading')->nullable();
            $table->string('about_sub_heading')->nullable();
            $table->string('mission')->nullable();
            $table->string('vision')->nullable();
            $table->string('value')->nullable();
            $table->string('years_of_experience')->nullable();

            $table->string('service_main_heading')->nullable();
            $table->string('service_quote')->nullable();

            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
