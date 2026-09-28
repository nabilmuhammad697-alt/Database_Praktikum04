<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id('id_pemeriksaan');
            $table->foreignId('id_kunjungan')->unique()->constrained('kunjungans', 'id_kunjungan')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('keluhan');
            $table->text('riwayat_penyakit')->nullable();
            $table->text('hasil_pemeriksaan');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('pemeriksaans'); }
};
