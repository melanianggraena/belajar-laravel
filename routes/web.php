<?php

// File: routes/web.php

use Illuminate\Support\Facades\Route;

// ============================================================
// CONTOH 1: Route paling sederhana - return string
// ============================================================
Route::get('/halo', function () {
    return 'Halo Dunia! Ini adalah halaman pertama saya di Laravel!';
});

// ============================================================
// CONTOH 2: Route dengan parameter
// ============================================================
Route::get('/sapa/{nama}', function (string $nama) {
    return 'Halo, ' . $nama . '! Selamat datang di Laravel.';
});

// ============================================================
// CONTOH 3: Route dengan parameter opsional
// ============================================================
Route::get('/profil/{nama?}', function (string $nama = 'Tamu') {
    return 'Profil pengguna: ' . $nama;
});

// ============================================================
// CONTOH 4: Route dengan nama (named route)
// ============================================================
Route::get('/tentang-kami', function () {
    return view('tentang');
})->name('tentang');

// ============================================================
// CONTOH 5: Route yang mengembalikan JSON
// ============================================================
Route::get('/api/info', function () {
    return response()->json([
        'aplikasi' => 'Belajar Laravel',
        'versi'    => '1.0.0',
        'status'   => 'aktif',
    ]);
});

// Tambahkan route baru untuk halaman halo
Route::get('/halo-blade', function () {
    return view('halo');
});

// ==================================================================================

Route::get('/profil-mahasiswa', function () {
    // Cara 1: Menggunakan array compact()
    $nama  = 'Andi Pratama';
    $nim   = '12345678';
    $jurusan = 'Teknik Informatika';
    $semester = 3;
    $ipk   = 3.75;

    return view('profil-mahasiswa', compact('nama', 'nim', 'jurusan', 'semester', 'ipk'));
    // compact() mengambil nama variabel dan nilainya menjadi array

    // Cara 2: Menggunakan array manual (ekuivalen dengan cara 1)
    // return view('profil-mahasiswa', [
    //     'nama'     => 'Andi Pratama',
    //     'nim'      => '12345678',
    //     'jurusan'  => 'Teknik Informatika',
    //     'semester' => 3,
    //     'ipk'      => 3.75,
    // ]);

    // Cara 3: Menggunakan method with() (method chaining)
    // return view('profil-mahasiswa')
    //     ->with('nama', 'Andi Pratama')
    //     ->with('nim', '12345678');
});

