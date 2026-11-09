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
        if (! Schema::hasTable('productos')) {
            Schema::create('productos', function (Blueprint $table) {
                $table->id('id_producto');
                $table->foreignId('id_categoria')->constrained('categorias', 'id_categoria')->restrictOnDelete();
                $table->string('nombre', 100);
                $table->text('descripcion');
                $table->decimal('precio', 10, 2)->nullable();
                $table->string('image_url')->nullable();
                $table->boolean('activa')->default(true);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

