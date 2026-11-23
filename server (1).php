<?php
/*
  Tugas Pendahuluan Modul 10 - Pemrograman Web (PHP dan AJAX)
  Nama : YOHANES SETIAWAN
  NIM  : 103092400028
*/

// Response dikembalikan dalam format teks biasa
header('Content-Type: text/plain; charset=UTF-8');

// Hanya menerima permintaan dengan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method tidak diizinkan. Gunakan POST.';
    exit;
}

// Tangkap data "nama" yang dikirim lewat POST
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';

// Validasi: input tidak boleh kosong
if ($nama === '') {
    // 400 = permintaan tidak valid; teks tetap dikirim agar bisa ditampilkan
    http_response_code(400);
    echo 'Input nama tidak boleh kosong!';
    exit;
}

echo "Halo, $nama! Selamat datang di AJAX!";
