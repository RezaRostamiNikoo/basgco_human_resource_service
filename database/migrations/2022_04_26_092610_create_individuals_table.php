<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();

            $table->string("first_name");
            $table->string("last_name");
            $table->string("national_id", 10)->unique()->index();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('individuals');
    }
}
