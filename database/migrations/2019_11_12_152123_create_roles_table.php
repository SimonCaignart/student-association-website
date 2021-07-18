<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::/*connection('mysql2')->*/create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Role_name');
        });

        DB::/*connection('mysql2')->*/table('roles')->insert(
            [
                ['Role_name' => 'Etudiant'],
                ['Role_name' => 'BDE'],
                ['Role_name' => 'Personnel'],
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
        Schema::/*connection('mysql2')->*/dropIfExists('roles');
    }
}
