<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('title');
            $table->string('cover');
            $table->date('date');
            $table->string('author')->nullable();
            $table->text('description');
            $table->string('type')->nullable();
            $table->string('file')->nullable();
            $table->string('url')->nullable();
            $table->integer('number_pages')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
