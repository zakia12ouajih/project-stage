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
        Schema::create('cas_civils', function (Blueprint $table) {
            $table->id();

            $table->integer('reste_derniere_session')->nullable();
            $table->integer('inscrit')->nullable();
            $table->integer('somme')->nullable();
            $table->integer('comdamne')->nullable();
            $table->integer('reste_sans_jugement')->nullable();
            $table->date('date')->nullable();
            $table->string('data_user_enter')->nullable();

            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('cas_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cas_civils');
    }
};
