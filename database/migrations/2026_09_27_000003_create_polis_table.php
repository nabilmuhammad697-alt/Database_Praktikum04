<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('polis', function (Blueprint $table) {
            $table->id('id_poli');
            $table->string('nama_poli', 100)->unique();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('polis'); }
};
