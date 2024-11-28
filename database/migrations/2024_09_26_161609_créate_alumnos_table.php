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
        //
        Schema::dropIfExists('alumnos'); // Elimina la tabla si existe
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->integer('edad');
            $table->timestamps();
            $table->softDeletes();


        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
