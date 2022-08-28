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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->integer('marque_id');
            $table->integer('categorie_id');
            $table->string('img_p_1');
            $table->string('img_p_2')->nullable();
            $table->string('img_p_3')->nullable();
            $table->string('img_p_4')->nullable();
            $table->string('nom_P');
            $table->text('description_P');
            $table->text('recomendation_P');
            $table->double('prix_P');
            $table->boolean('is_medical');
            $table->boolean('disponible');
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
        Schema::dropIfExists('produits');
    }
};
