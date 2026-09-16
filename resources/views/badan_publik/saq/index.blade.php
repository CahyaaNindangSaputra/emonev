<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-lg font-bold mb-4">Pengisian Kuesioner SAQ</h2>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">{{ session('success') }}</div>
                @endif

                <form action="{{ route('badan-publik.saq.store') }}" method="POST">
                    @csrf
                    <table class="w-full border-collapse border border-gray-300 mb-4">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border p-2">Aspek / Parameter</th>
                                <th class="border p-2">Pertanyaan</th>
                                <th class="border p-2">Pilihan (YA/TIDAK)</th>
                                <th class="border p-2">Link Bukti (Gdrive/Web)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pertanyaans as $p)
                            <tr>
                                <td class="border p-2 text-sm">
                                    <b>{{ $p->aspek }}</b><br>
                                    <span class="text-gray-500">{{ $p->parameter }}</span>
                                </td>
                                <td class="border p-2 text-sm">{{ $p->isi_pertanyaan }}</td>
                                <td class="border p-2 text-center">
                                    <select name="jawaban[{{ $p->id }}][pilihan]" class="border rounded p-1">
                                        <option value="">-- Pilih --</option>
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>
                                    </select>
                                </td>
                                <td class="border p-2">
                                    <input type="text" name="jawaban[{{ $p->id }}][link]" placeholder="https://..." class="border rounded p-1 w-full">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Jawaban</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>