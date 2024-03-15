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
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'id_maquina');
            $table->string(column: 'maquina');
            $table->string(column: 'marca');
            $table->string(column: 'modelo');
            $table->string(column: 'ano');
            $table->string(column: 'chasis')->unique();
            $table->string(column: 'titular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas');
    }
};
