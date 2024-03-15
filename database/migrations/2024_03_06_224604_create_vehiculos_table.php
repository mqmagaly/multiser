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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'id_vehiculo');
            $table->string(column: 'placa');
            $table->string(column: 'marca');
            $table->string(column: 'modelo');
            $table->string(column: 'ano');
            $table->string(column: 'chasis')->unique();
            $table->string(column: 'aseguradora');
            $table->string(column: 'num_seguro');
            $table->string(column: 'seguro_vencimiento');
            $table->string(column: 'rev_tecnica');
            $table->string(column: 'rev_vencimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
