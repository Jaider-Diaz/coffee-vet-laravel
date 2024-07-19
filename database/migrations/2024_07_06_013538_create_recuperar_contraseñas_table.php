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
        Schema::create('recuperar_contraseñas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ingrese_un_email', length: 100);
            $table->string('contraseña', length: 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recuperar_contraseñas');
    }
};
