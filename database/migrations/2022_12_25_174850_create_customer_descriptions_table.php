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
        Schema::create('customer_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id_customer_description');
            $table->unsignedBigInteger('customer_desc_id');
            $table->string('address');
            $table->integer('age');
            $table->enum('gender',['male', 'female']);
            $table->string('phone');
            $table->string('photo');
            $table->timestamps();
            $table->foreign('customer_desc_id')
                ->references('id_customer')
                ->on('customers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_descriptions');
    }
};
