<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table){
            $table->increments('ID');
            $table->string('Title')->unique();
            $table->string('Image');
            $table->string('Body');
            $table->timestamp('Created_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('Updated_on')->nullable();
            $table->string('Url')->unique();
            $table->smallInteger('Publish')->lenght(1)->default("1");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
