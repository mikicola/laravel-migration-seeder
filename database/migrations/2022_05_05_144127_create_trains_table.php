<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 100);
            $table->string('Stazione_di_partenza', 100);
            $table->string('Stazione_di_arrivo', 100);
            $table->date('Orario_di_partenza');
            $table->date('Orario_di_arrivo');
            $table->string('Codice_Treno', 10);
            $table->string('Numero_Carrozze', 10)->nullable();
            $table->string('In_orario', 50);
            $table->string('Cancellato', 50);

            // da aggiustare orario di partenza, arrivo e cancellato
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
