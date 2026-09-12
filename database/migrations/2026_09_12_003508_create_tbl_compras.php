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
        Schema::create('tbl_compras', function (Blueprint $table) {
            $table->id('compras_id');
            $table->timestamps();
            $table->string('nomeCompra', 100);
            $table->string('tipoCompra', 50);
            $table->integer('quantidade')->default(1); // caso nao seja colocado nenhum valor sera inserido a quantidade 1
            $table->decimal('valor', 8, 2)->default(0.00); // Permite até 8 dígitos no total e 2 casas decimais (ex: 999999.99)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_compras');
    }
};
