<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeniusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menius', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('title', 200);
            $table->decimal('price', 6, 2);
            $table->mediumInteger('weight');
            $table->mediumInteger('meat');
            $table->text('about');
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
        Schema::dropIfExists('menius');
    }
}
