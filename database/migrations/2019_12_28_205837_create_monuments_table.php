<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monuments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->char('name');
            $table->unsignedSmallInteger('buildYear')->default(0);
            $table->unsignedSmallInteger('destroyYear');
            $table->unsignedInteger('kingdom_id');
            $table->unsignedTinyInteger('influence')->default(1);

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
        Schema::dropIfExists('monuments');
    }
}
