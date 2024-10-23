
<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-4">Tambah Siswa</a>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelapor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Terlapor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Laporan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bukti</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->pelapor }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->terlapor }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->kelas }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->laporan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{asset('storage/siswas/'.$siswa->bukti)}}" alt ="Ini gambar Bukti" class="rounded" style="width: 150px">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
