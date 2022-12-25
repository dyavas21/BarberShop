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
            $table->id('id');
            $table->unsignedInteger('customer_id');
            $table->string('address');
            $table->integer('age');
            $table->enum('gender',['male', 'female']);
            $table->string('phone');
            $table->string('photo');
            $table->timestamps();
            $table->foreign('customer_id')
                ->references('id')
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
