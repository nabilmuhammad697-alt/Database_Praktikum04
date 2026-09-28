<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->foreignId('user_id')->unique()->constrained('users', 'id_user')->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('jenis_pasien', ['santri', 'umum']);
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('asrama', 100)->nullable();
            $table->string('no_identitas', 30);
            $table->date('tanggal_lahir')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('pasiens'); }
};
