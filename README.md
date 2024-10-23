
Aplikasi Pengaduan Siswa
Aplikasi Pengaduan Siswa adalah platform yang memungkinkan siswa untuk melaporkan masalah, memberikan saran, atau menyampaikan keluhan terkait pengalaman mereka di sekolah. Aplikasi ini dibangun menggunakan Laravel dan menyediakan antarmuka yang mudah digunakan.

Fitur
Registrasi dan login pengguna
Pengaduan siswa dengan kategori dan status
Melihat pengaduan yang telah dibuat
Admin dapat menanggapi pengaduan
Sistem notifikasi untuk pembaruan status pengaduan
Prasyarat
Sebelum memulai, pastikan Anda telah menginstal:

PHP (versi 8.0 atau lebih tinggi)
Composer
Node.js dan npm
Database (MySQL, PostgreSQL, SQLite, dll.)
Instalasi
1. Mengunduh Proyek
Clone repositori ini ke dalam direktori lokal Anda:

bash
Copy code
git clone https://github.com/username/repo-name.git
Ganti username/repo-name dengan nama pengguna dan nama repositori Anda.

2. Masuk ke Direktori Proyek
bash
Copy code
cd nama-proyek
3. Menginstal Dependensi
Jalankan perintah berikut untuk menginstal dependensi yang diperlukan:

bash
Copy code
composer install
4. Menyalin File .env
Salin file .env.example menjadi .env dan sesuaikan konfigurasi database Anda:

bash
Copy code
cp .env.example .env
5. Menghasilkan Kunci Aplikasi
Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

bash
Copy code
php artisan key:generate
6. Migrasi Database
Jalankan migrasi untuk membuat tabel yang diperlukan dalam database:

bash
Copy code
php artisan migrate
7. Menginstal Dependensi NPM
Setelah menginstal dependensi, jalankan perintah ini untuk menginstal dependensi front-end:

bash
Copy code
npm install
8. Membangun Aset Front-end
Setelah menginstal dependensi, jalankan perintah ini untuk membangun aset:

bash
Copy code
npm run build
9. Menjalankan Server
Sekarang Anda dapat menjalankan server Laravel dengan perintah:

bash
Copy code
php artisan serve
Buka browser dan akses http://localhost:8000.

Menggunakan Aplikasi
Registrasi dan Login
Akses halaman registrasi di http://localhost:8000/register.
Lengkapi formulir registrasi.
Setelah berhasil mendaftar, masuk menggunakan akun yang telah dibuat di http://localhost:8000/login.
Membuat Pengaduan
Setelah login, Anda dapat membuat pengaduan baru.
Isi formulir dengan detail pengaduan, termasuk kategori dan deskripsi.
Kirim pengaduan.
Melihat Pengaduan
Akses halaman profil untuk melihat pengaduan yang telah Anda buat.
Anda dapat melihat status dan tanggapan dari admin.
Admin
Admin dapat mengelola pengaduan, memberikan tanggapan, dan memperbarui status pengaduan melalui antarmuka admin yang terpisah.

Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan fork repositori dan kirim pull request. Pastikan untuk mengikuti pedoman kontribusi yang baik.

Lisensi
Proyek ini dilisensikan di bawah MIT License.

Penutup
Terima kasih telah menggunakan Aplikasi Pengaduan Siswa. Kami berharap aplikasi ini dapat membantu meningkatkan komunikasi antara siswa dan pihak sekolah!



