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
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('aspek'); // Contoh: Kualitas Informasi (6)
            $table->string('parameter'); // Contoh: Informasi Wajib Berkala
            $table->text('isi_pertanyaan'); // Contoh: a. LRA (Laporan Realisasi Anggaran)
            $table->integer('nomor_urut')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaan');
    }
};
