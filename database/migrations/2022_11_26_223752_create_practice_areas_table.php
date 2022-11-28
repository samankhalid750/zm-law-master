<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticeAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_areas', function (Blueprint $table) {
            $table->id();
            $table->string('favicon')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();

            $table->string('seo_practice_areas_title')->nullable();
            $table->longText('seo_practice_areas_description')->nullable();
            $table->string('seo_practice_areas_keyword')->nullable();
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
        Schema::dropIfExists('practice_areas');
    }
}
