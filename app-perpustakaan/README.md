# App Perpustakaan

Aplikasi sistem informasi perpustakaan berbasis framework Laravel 12.

## Cara Menjalankan Project
1. Clone repository: `git clone https://github.com/momo28ses/app-perpustakaan.git`
2. Masuk direktori: `cd app-perpustakaan`
3. Install dependensi: `composer install`
4. Salin environment: `cp .env.example .env` dan sesuaikan database `db_perpustakaan`
5. Jalankan migrasi: `php artisan key:generate` lalu `php artisan migrate`
6. Jalankan server: `php artisan serve`

## Konsep MVC
- **Model:** Menangani struktur data dan query/interaksi ke basis data.
- **View:** Mengelola tampilan UI untuk disajikan kepada pengguna.
- **Controller:** Mengatur alur logika antara input pengguna, Model, dan View.