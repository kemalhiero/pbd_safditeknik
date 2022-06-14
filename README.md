# Tugas Besar PBD-Safdi Teknik

- Tabel Relasi
<img src="tabelrelasi.jpeg">

Fungsional

1.	Admin
●	Admin dapat login dan logout		v
●	Admin mendaftarkan pelanggan	v
●	Admin dapat mendaftarkan barang pelanggan yang akan diperbaiki	v
Deskripsi letaknya di kolom deskripsi pengecekan
●	Admin dapat mengelola data pembayaran	v
●	Admin dapat mengelola data pengecekan/transaksi		v
●	Admin dapat mengelola laporan pembayaran (sediakan fitur print)
●	Admin melihat sparepart

2.	Teknisi
●	Teknisi dapat login dan logout  v
●	Teknisi dapat mengkonfirmasi barang dapat diperbaiki atau tidak, dan juga dapat menambahkan data deskripsi pengecekan barang (teknisi diambil dari akun teknisi yang melakukan konfirmasi pengecekan, kalau ditekan submit maka akan kembali ke menu pengecekan barang, data yang ditampilkan pada tabel hanya data yang belum dikonfirmas <pada kolom konfirmasi masih bernilai null>, kalau misalnya sudah di konfirmasi, maka tombol konfirmasi pada kolom aksi sudah tidak bisa digunakan lagi)	v
●	Teknisi dapat menambahkan progres perbaikan barang (di halaman pembayaran barang, buat kolom baru , kolom status/progres, berisi barang sedang diproses, barang sudah dibayar, barang batal diperbaiki)
●	sparepart

3.	Pelanggan (customer)
●	Customer dapat login dan logout	v
●	Customer dapat mendaftarkan barang
Sama dengan yg ini (daftar barang) ditambah halaman dashboard/beranda
●	Customer dapat melihat progres perbaikan barang
●	Customer dapat melihat detail pembayaran (nama, quantity<jumlah transaksi_sparepart, sparepart>, harga, mirip sama nota belanja )
