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
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->decimal('prix');
            $table->string('date debut validite');
            $table->string('date fin');
            $table->unsignedBigInteger('dossiers_id');
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
        Schema::table('tarifications', function (Blueprint $table) {
            $table->foreignId('dossiers_id');

        });
        Schema::dropIfExists('tarifications');
    }
};
