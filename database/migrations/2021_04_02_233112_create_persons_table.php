<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('position')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('mail')->nullable();
            $table->string('photo')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('secretary_id')->nullable()->constrained('secretaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
