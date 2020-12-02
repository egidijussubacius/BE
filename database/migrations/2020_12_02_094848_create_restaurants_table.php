<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->integer('id', 11);
          
            $table->string('title', 100);
            $table->smallInteger('customers');
            $table->tinyInteger('employees');
            $table->integer('meniu_id')->unsignedInteger('meniu_id');
            $table->foreign('meniu_id')->references('id')->on('menius');
        
            $table->timestamps();
        });
    }

  
    // $table->foreign('country_id')->references('id')->on('countries');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
