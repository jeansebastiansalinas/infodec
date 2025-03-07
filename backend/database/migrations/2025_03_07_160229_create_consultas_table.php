<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad');
            $table->string('moneda_base');
            $table->string('moneda_destino');
            $table->decimal('tasa', 10, 4);
            $table->decimal('presupuesto', 15, 2);
            $table->decimal('monto_convertido', 15, 2);
            $table->decimal('temperatura', 5, 2);
            $table->integer('humedad');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('consultas');
    }
};
