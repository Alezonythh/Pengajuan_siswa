# Aplikasi Pengajuan Siswa

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## Deskripsi

Aplikasi Pengajuan Siswa adalah platform berbasis web yang memungkinkan siswa untuk mengajukan permohonan, saran, atau keluhan terkait kegiatan belajar mengajar di sekolah. Aplikasi ini bertujuan untuk meningkatkan komunikasi antara siswa dan pihak sekolah, serta menyediakan sistem yang efisien untuk pengelolaan pengajuan.

## Fitur Utama

- **Otentikasi Pengguna**: Registrasi dan login yang aman untuk siswa dan admin.
- **Pengajuan**: Membuat, mengedit, dan menghapus pengajuan.
- **Kategori Pengajuan**: Mengelompokkan pengajuan berdasarkan kategori yang relevan.
- **Tanggapan Admin**: Admin dapat memberikan tanggapan terhadap setiap pengajuan yang diajukan.
- **Notifikasi**: Sistem notifikasi untuk memberi tahu pengguna tentang pembaruan status pengajuan.
- **Dashboard Admin**: Antarmuka untuk mengelola dan memonitor semua pengajuan yang masuk.

## Prasyarat

Sebelum memulai, pastikan Anda memiliki:

- PHP versi 8.0 atau lebih tinggi
- Composer
- Node.js dan npm
- Database seperti MySQL atau PostgreSQL

## Instalasi

### 1. Clone Repositori

Clone repositori aplikasi dengan perintah berikut:

```bash
git clone https://github.com/username/repo-name.git
```
### 2. Masuk ke Direktori Proyek
```bash 
cd nama-proyek
```
### 3. Instal Dependensi
```bash
composer install
```
### 4. Konfigurasi Database
Buat file `.env` dan konfigurasikan koneksi database.
### 5. Generate Key
```bash
php artisan key:generate
```
### 6. Jalankan Migrasi
```bash
php artisan migrate
```
### 7. Jalankan Aplikasi
```bash
php artisan serve
```
## Penggunaan
- **Registrasi**: Daftar sebagai siswa atau guru.
- **Login**: Masuk ke akun Anda.
- **Pengajuan**: Buat, edit, atau hapus pengajuan.
- **Dashboard Guru**: Mengelola semua pengajuan yang masuk.
- **Dashboard Siswa**: Mengelola pengajuan Anda sendiri.
## Kontribusi
Kami sangat menghargai kontribusi dari komunitas. Jika Anda ingin berkontribusi, silakan buka issue atau pull request.
## Lisensi
Aplikasi ini dilisensikan di bawah Lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detailnya.
## Kontak
Jika Anda memiliki pertanyaan atau masalah, silakan hubungi kami melalui [revan.fahriansyah32@smk.belajar.id].
Terima kasih telah menggunakan Aplikasi Pengajuan Siswa!
