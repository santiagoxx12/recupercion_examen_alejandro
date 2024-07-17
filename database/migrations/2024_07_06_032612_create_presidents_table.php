<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presidents', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('año');
            $table->date('fecha_nac');
            $table->string('apellido');
            $table->unsignedBigInteger('aquipment_id');
            $table->foreign('aquipment_id')->references('id')->on('equipment')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presidents');
    }
};
