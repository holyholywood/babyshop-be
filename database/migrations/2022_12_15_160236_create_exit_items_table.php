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
        Schema::create('exit_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transactions_id');
            $table->foreign('transactions_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->unsignedBigInteger('items_id');
            $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');
            $table->integer('qty');
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
        Schema::dropIfExists('exit_items');
    }
};
