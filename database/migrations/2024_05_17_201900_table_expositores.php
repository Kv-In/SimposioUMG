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
        if (!Schema::hasTable("table_expositores")) {
            Schema::create('table_expositores', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('Nombre');
                $table->string('Apellidos');
                $table->string('foto');
                $table->string('Correo');
                $table->string('Telefono')->nullable();
                $table->string('Facebook')->nullable();
                $table->string('GitHub')->nullable();
                $table->string('Instagram')->nullable();
                $table->string('X')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
