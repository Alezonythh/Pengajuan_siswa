
<x-app-layout>
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Siswa</h1>

        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div>
                <label for="pelapor" class="block text-sm font-medium text-gray-700">Pelapor</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" id="pelapor" name="pelapor" required>
            </div>

            <div>
                <label for="terlapor" class="block text-sm font-medium text-gray-700">Terlapor</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" id="terlapor" name="terlapor" required>
            </div>

            <div>
                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" id="kelas" name="kelas" required>
            </div>

            <div>
                <label for="laporan" class="block text-sm font-medium text-gray-700">Laporan</label>
                <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" id="laporan" name="laporan" rows="5" required></textarea>
            </div>

            <div>
                <label for="bukti" class="block text-sm font-medium text-gray-700">Bukti (optional)</label>
                <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" id="bukti" name="bukti">
            </div>

            <button type="submit" class="btn btn-success mt-4">Simpan</button>
        </form>
    </div>
</x-app-layout>
