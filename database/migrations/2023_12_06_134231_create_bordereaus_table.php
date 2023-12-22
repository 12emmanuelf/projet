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
        Schema::create('bordereaus', function (Blueprint $table) {
            $table->id();
            $table->char('montant_total');
            $table->string('statut');
            $table->date('date');
            $table->foreignId('coursiers_id')->constrained();
            $table->foreignId('livraison_id')->constrained();
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
        Schema::table('bordereaus', function (Blueprint $table) {
            $table->foreignId(['coursiers_id','livraison_id']);

        });
        Schema::dropIfExists('bordereaus');
    }
};
