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
        
        Schema::create('table_productos', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->decimal('precio', $precision = 8, $scale = 2);
            $table->string('descripcion');
            $table->timestamps();
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
