<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('videos', function(Blueprint $table){
            $table->increments('ID')->unsigned();
            $table->string("Title")->unique();
            $table->string("Description");
            $table->string("Url");
            $table->smallInteger("Published")->lenght(1)->defaulr("1");
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('videos');
    }
}
