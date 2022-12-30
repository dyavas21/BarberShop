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
        Schema::create('barber_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id_barber_description');
            $table->unsignedBigInteger('barber_desc_id');
            $table->string('address');
            $table->integer('age');
            $table->enum('gender',['male', 'female']);
            $table->integer('harga');
            $table->string('phone');
            $table->string('description');
            $table->string('certificate');
            $table->string('gambarbarber');
            $table->timestamps();
            $table->foreign('barber_desc_id')
                ->references('barber_id')
                ->on('barbers')
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
        Schema::dropIfExists('barber_descriptions');
    }
};
