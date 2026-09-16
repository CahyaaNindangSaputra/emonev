<?php

namespace App\Http\Controllers\BadanPublik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\JawabanSaq;
use Illuminate\Support\Facades\Auth;

class SaqController extends Controller
{
    // Menampilkan daftar pertanyaan SAQ
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        return view('badan_publik.saq.index', compact('pertanyaans'));
    }

    // Menyimpan jawaban Ya/Tidak dan Link GDrive
    public function store(Request $request)
    {
        $userId = Auth::id(); // ID Badan Publik yang sedang login

        foreach ($request->jawaban as $pertanyaanId => $data) {
            JawabanSaq::updateOrCreate(
                [
                    'user_id' => $userId,
                    'pertanyaan_id' => $pertanyaanId
                ],
                [
                    'pilihan_jawaban' => $data['pilihan'] ?? null,
                    'link_bukti' => $data['link'] ?? null,
                ]
            );
        }

        return redirect()->back()->with('success', 'Jawaban SAQ berhasil disimpan!');
    }
}