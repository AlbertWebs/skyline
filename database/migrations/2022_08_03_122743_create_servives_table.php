<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servives', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('meta')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->string('slung')->nullable();
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
        Schema::dropIfExists('servives');
    }
}
