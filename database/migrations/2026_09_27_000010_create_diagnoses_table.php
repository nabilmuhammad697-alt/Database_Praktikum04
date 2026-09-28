<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id('id_diagnosis');
            $table->foreignId('id_pemeriksaan')->unique()->constrained('pemeriksaans', 'id_pemeriksaan')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama_diagnosis', 150);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('diagnoses'); }
};
