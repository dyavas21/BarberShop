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
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->unsignedBigInteger('tipe_id');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('gambar');
            $table->foreign('tipe_id')
            ->references('id_tipe_produk')
            ->on('tipe_produks')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->string('customer_name');
            $table->string('customer_email')->nullable();
            $table->timestamps();
        });
        
        Schema::create('order_product', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id_order')->on('orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id_produk')->on('produks');
            $table->integer('quantity');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
