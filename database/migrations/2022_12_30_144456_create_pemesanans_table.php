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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id_pemesanan');
            $table->unsignedBigInteger('pemesanan_id_cust');
            $table->unsignedBigInteger('pemesanan_id_barber');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('invoice');
            $table->timestamps();
            $table->foreign('pemesanan_id_cust')
            ->references('customer_id')
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('pemesanan_id_barber')
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
        Schema::dropIfExists('pemesanans');
    }
};
