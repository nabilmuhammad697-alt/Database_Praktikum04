<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('dokters', function (Blueprint $table) {
            $table->id('id_dokter');
            $table->foreignId('user_id')->unique()->constrained('users', 'id_user')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_poli')->constrained('polis', 'id_poli')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nama', 100);
            $table->string('spesialisasi', 100);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('dokters'); }
};
