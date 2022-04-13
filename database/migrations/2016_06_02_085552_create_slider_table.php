<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('slider', function(Blueprint $table){
            $table->increments('ID')->unsigned();
            $table->string("Name")->unique();
            $table->string("Title");
            $table->string("Text");
            $table->string("Image", 600);
            $table->smallInteger("Button")->default("1");
            $table->string("ButtonText");
            $table->string("TitlePositionTop")->nullable();
            $table->string("TitlePositionLeft")->nullable();
            $table->string("TitleStyleCSS")->nullable();
            $table->string("TextPositionTop")->nullable();
            $table->string("TextPositionLeft")->nullable();
            $table->string("TextStyleCSS")->nullable();
            $table->string("ButtonPositionTop")->nullable();
            $table->string("ButtonPositionLeft")->nullable();
            $table->string("ButtonStyleCSS")->nullable();
            $table->smallInteger("Active")->default("1");
            $table->smallInteger("Published")->default("1");
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
        Schema::drop('slider');
    }
}
