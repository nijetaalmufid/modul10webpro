<img width="1920" height="1080" alt="p" src="https://github.com/user-attachments/assets/282b1241-12a9-43b2-abac-bc88cd043adf" />
<img width="1920" height="1080" alt="o" src="https://github.com/user-attachments/assets/4244d0d2-0796-4e05-b7cc-d990f3753521" />
1. Pengertian dan Cara Kerja AJAX

AJAX (Asynchronous JavaScript and XML) adalah teknik pengembangan web yang memungkinkan halaman bertukar data dengan server di latar belakang tanpa memuat ulang seluruh halaman. Cara kerjanya:

Pengguna melakukan aksi (klik, mengetik, menggulir).
JavaScript mengirim request ke server menggunakan fetch() atau XMLHttpRequest.
Server memproses permintaan dan mengirim respons, biasanya berformat JSON.
JavaScript menerima respons tersebut, dan halaman tetap bisa dipakai selama menunggu karena prosesnya asynchronous.
JavaScript memperbarui bagian halaman yang perlu diubah melalui DOM, tanpa reload penuh.

2. Contoh Kasus Nyata AJAX untuk Meningkatkan User Experience

Autocomplete pencarian (Google, Tokopedia): saran kata kunci muncul langsung saat mengetik, sehingga pengguna menemukan yang dicari lebih cepat.
Infinite scroll (Instagram, Facebook): postingan baru dimuat otomatis saat menggulir, tanpa tombol halaman berikutnya.
Tombol "Suka" dan komentar: jumlahnya langsung berubah tanpa berpindah halaman.
Validasi formulir langsung: pengguna langsung tahu jika username atau email sudah dipakai, tanpa harus mengisi ulang formulir.
Keranjang belanja e-commerce: jumlah item langsung diperbarui dan pengguna bisa terus berbelanja.
