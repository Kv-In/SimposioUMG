<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable("table_organizadores")) {
            Schema::create('table_organizadores', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('Nombre');
                $table->string('url');
                $table->string('Lider')->nullable();
                $table->string('Equipo')->nullable();
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
