<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('antreans', function (Blueprint $table) {
            $table->id('id_antrean');
            $table->foreignId('id_kunjungan')->unique()->constrained('kunjungans', 'id_kunjungan')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('nomor_antrean');
            $table->string('status', 30)->default('menunggu');
            $table->dateTime('waktu_panggil')->nullable();
            $table->timestamps();
            $table->index(['status', 'nomor_antrean']);
        });
    }
    public function down(): void { Schema::dropIfExists('antreans'); }
};
