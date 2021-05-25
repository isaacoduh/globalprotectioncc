<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();

            $table->integer('age')->nullable();
            $table->string('blood')->nullable();
            $table->string('born')->nullable();
            $table->string('born_place')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('father_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('height')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name')->nullable();
            $table->string('national_code')->nullable();
            $table->string('religion')->nullable();
            $table->string('system_id')->nullable();
            $table->integer('weight')->nullable();
            $table->json('meta')->nullable();
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
        Schema::dropIfExists('people');
    }
}
