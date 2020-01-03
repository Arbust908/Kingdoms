<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNobleHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noble_houses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->char('name');
            $table->unsignedInteger('heraldry');
            $table->unsignedSmallInteger('maxSize');
            $table->unsignedSmallInteger('power');
            $table->unsignedInteger('kingdom_id');

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
        Schema::dropIfExists('noble_houses');
    }
}
