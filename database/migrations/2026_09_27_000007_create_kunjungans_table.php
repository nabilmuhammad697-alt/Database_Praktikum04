<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id('id_kunjungan');
            $table->foreignId('id_pasien')->constrained('pasiens', 'id_pasien')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_dokter')->constrained('dokters', 'id_dokter')->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('id_poli')->constrained('polis', 'id_poli')->restrictOnUpdate()->restrictOnDelete();
            $table->date('tanggal');
            $table->string('status', 30)->default('terdaftar');
            $table->text('keluhan_awal')->nullable();
            $table->timestamps();
            $table->index(['tanggal', 'id_poli']);
        });
    }
    public function down(): void { Schema::dropIfExists('kunjungans'); }
};
