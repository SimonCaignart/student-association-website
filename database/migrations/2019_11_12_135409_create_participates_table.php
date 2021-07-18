<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participates', function (Blueprint $table) {
            $table->increments('id');
            //Foreign key of User
            $table->integer('Participant_id')->unsigned();
            $table->foreign('Participant_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //Foreign key of Activity
            $table->integer('Activity_id')->unsigned();
            $table->foreign('Activity_id')->references('id')->on('manifestations')->onDelete('cascade')->onUpdate('cascade');
            //Firstname
            $table->string('Participant_firstname');
            //Name
            $table->string('Participant_name');
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
        Schema::dropIfExists('participates');
    }
}
