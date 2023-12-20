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
        Schema::create('lfactures', function (Blueprint $table) {
            $table->id();
            $table->char('prix');
            $table->char('numero');
            $table->char('quantite');
            $table->string('statut');
            $table->unsignedBigInteger('facture_id');
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
        Schema::table('lfactures', function (Blueprint $table) {
            $table->foreignId('facture_id');

        });
        Schema::dropIfExists('lfactures');
    }
};
