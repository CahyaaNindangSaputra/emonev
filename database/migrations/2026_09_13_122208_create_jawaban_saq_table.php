<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jawaban_saq', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // ID Badan Publik
            $table->foreignId('pertanyaan_id')->constrained('pertanyaan')->onDelete('cascade'); // ID Pertanyaan
            $table->enum('pilihan_jawaban', ['YA', 'TIDAK'])->nullable(); // Diisi Badan Publik
            $table->text('link_bukti')->nullable(); // Link GDrive / Website bukti
            $table->decimal('nilai_verifikator', 5, 2)->nullable(); // Diisi Admin/Verifikator
            $table->text('catatan_verifikator')->nullable(); // Catatan dari Verifikator
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_saq');
    }
};
