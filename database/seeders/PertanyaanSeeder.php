<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pertanyaan')->insert([
            [
                'aspek' => 'KUALITAS INFORMASI (6)',
                'parameter' => 'INFORMASI WAJIB BERKALA',
                'isi_pertanyaan' => 'a. LRA (Laporan Realisasi Anggaran Tahun 2025)',
                'nomor_urut' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'aspek' => 'KUALITAS INFORMASI (6)',
                'parameter' => 'INFORMASI WAJIB BERKALA',
                'isi_pertanyaan' => 'b. Aset & Kekayaan Negara/Daerah Tahun 2025',
                'nomor_urut' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
        ]);
    }
}