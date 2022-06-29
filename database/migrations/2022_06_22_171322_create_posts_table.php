<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author');
            $table->string('cover')->nullable(); // Imagem de destaque que pode nao ser obrigatório
            $table->string('title');
            $table->string('description');
            $table->longText('body');
            $table->string('status')->default(\App\Helpers\Constants\PostInterface::POST_STATUS_RECENT);
            $table->string('slug')->unique();
            $table->boolean('published')->default(true);
            $table->boolean('draft')->default(false);
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
        Schema::dropIfExists('posts');
    }
};
