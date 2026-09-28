<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin');
            $table->foreignId('user_id')->unique()->constrained('users', 'id_user')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama', 100);
            $table->string('jabatan', 100);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('admins'); }
};
