
<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        
                        </th>

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
                        <td class="px-4 py-3">
                            <span class="badge @if ($siswa->status == 'sedang dalam tinjuan')badge-danger @elseif($siswa->status == 'done')badge-success @endif">
                            {{$siswa->status}}
                        </span>
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        @if($siswa->status != 'Selesai')
                        <form action="{{ route('guru.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                                <button name="selesai">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                    </svg>
                                </button>
                        </form>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
