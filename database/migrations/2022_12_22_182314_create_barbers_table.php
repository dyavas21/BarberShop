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
        Schema::create('barbers', function (Blueprint $table) {
            $table->bigIncrements('id_barber');
            $table->unsignedBigInteger('barber_id');
            $table->string('fname');
            $table->string('lname');
            $table->timestamps();
            $table->foreign('barber_id')
            ->references('id_user')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbers');
    }
};
