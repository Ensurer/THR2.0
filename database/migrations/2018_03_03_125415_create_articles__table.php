<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('art_title',100)->nullable();
            $table->string('art_tag',100)->nullable();
            $table->string('art_description',255)->nullable();
            $table->string('art_thumb',255)->nullable();
            $table->text('art_content')->nullable();
            $table->string('art_editor',50)->nullable();
            $table->integer('art_view')->unsigned();
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
        Schema::dropIfExists('articles');
    }
}
