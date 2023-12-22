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
        Schema::create('sinistres', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('date_accident');
            $table->string('lieu');
            $table->string('statut');
            $table->foreignId('sinistres_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sinistres', function (Blueprint $table) {
            $table->foreignId('sinistres_id');

        });
        Schema::dropIfExists('sinistres');
    }
};
