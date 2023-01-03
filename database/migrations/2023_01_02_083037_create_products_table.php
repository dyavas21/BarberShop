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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id_cust');
            $table->unsignedBigInteger('status_id')->default('1');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->foreign('order_id_cust')
            ->references('customer_id')
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('status_id')
            ->references('id_status')
            ->on('statuses')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
        
        Schema::create('order_product', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
};
