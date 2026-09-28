<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->foreignId('id_admin')->constrained('admins', 'id_admin')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_poli')->nullable()->constrained('polis', 'id_poli')->nullOnDelete();
            $table->string('jenis_laporan', 100);
            $table->date('periode_awal');
            $table->date('periode_akhir');
            $table->unsignedInteger('total_pasien')->default(0);
            $table->unsignedInteger('total_kunjungan')->default(0);
            $table->text('keterangan')->nullable();
            $table->timestamps();
            $table->index(['periode_awal', 'periode_akhir']);
        });
    }
    public function down(): void { Schema::dropIfExists('laporans'); }
};
