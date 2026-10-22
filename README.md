# Portfolio PHP

Website portofolio personal berbasis PHP native, HTML, CSS, dan JavaScript. Tidak memerlukan framework atau database.

## Cara menjalankan secara lokal

1. Ekstrak folder `portfolio-php` ke direktori web server, misalnya `htdocs` jika menggunakan XAMPP.
2. Pastikan Apache aktif.
3. Buka `http://localhost/portfolio-php/`.

Alternatif jika PHP sudah terpasang: buka terminal di folder proyek lalu jalankan `php -S localhost:8000`, kemudian buka `http://localhost:8000`.

## Sebelum dipublikasikan

Buka `index.php` dan ubah bagian berikut di awal file:

- `$profile`: nama, role, lokasi, email, inisial, GitHub, dan LinkedIn.
- `$skills`: sesuaikan dengan kemampuan yang benar-benar dikuasai.
- `$projects`: sesuaikan deskripsi, stack, status, dan tautan demo/repository dengan hasil kerja aktual.
- `$services`: ubah area kontribusi sesuai target posisi.

Proyek yang saat ini dicantumkan merupakan contoh berdasarkan proyek akademik/pengembangan yang pernah dibahas. Pastikan isi akhirnya akurat dan jangan mencantumkan tautan yang belum tersedia.

## Deploy cepat

Website ini tidak membutuhkan database. Upload isi folder proyek ke hosting yang mendukung PHP 8+ dan arahkan domain/subdomain ke folder tersebut. Untuk hosting statis seperti GitHub Pages, file PHP tidak akan dieksekusi; gunakan hosting yang mendukung PHP.

Google Fonts digunakan untuk tipografi. Jika koneksi eksternal dibatasi, website tetap berfungsi dengan font fallback.

## Struktur

```text
portfolio-php/
├── index.php
├── README.md
└── assets/
    ├── css/style.css
    └── js/main.js
```
