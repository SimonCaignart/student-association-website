<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('cesis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Location');
        });

        DB::connection('mysql2')->table('Cesis')->insert(
            [
                ['Location' => 'Aix-en-Provece'],
                ['Location' => 'Angouleme'],
                ['Location' => 'Arras'],
                ['Location' => 'Bordeaux'],
                ['Location' => 'Brest'],
                ['Location' => 'Caen'],
                ['Location' => 'Chateauxroux'],
                ['Location' => 'Dijon'],
                ['Location' => 'Grenoble'],
                ['Location' => 'La Rochelle'],
                ['Location' => 'Le Mans'],
                ['Location' => 'Lille'],
                ['Location' => 'Lyon'],
                ['Location' => 'Montpellier'],
                ['Location' => 'Nancy'],
                ['Location' => 'Nantes'],
                ['Location' => 'Paris Nanterre'],
                ['Location' => 'Pau'],
                ['Location' => 'Reims'],
                ['Location' => 'Rouen'],
                ['Location' => 'Saint-Nazaire'],
                ['Location' => 'Strasbourg'],
                ['Location' => 'Toulouse'],
                ['Location' => 'Orleans'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('cesis');
    }
}
