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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('expedition');
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_postale');
            $table->string('n_colis');
            $table->string('poids');
            $table->string('reference');
            $table->string('expediteur');
            $table->foreignId('natures_id')->constrained()->default(1);
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
        Schema::table('colis', function (Blueprint $table) {
            $table->foreignId('natures_id');

        });
        Schema::dropIfExists('colis');
    }
};
