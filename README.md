# TP2DPBO2425C1

## Janji 
Saya Dzaka Musyaffa Hidayat dengan NIM 2404913 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

Repository ini berisi implementasi dari konsep _Object Oriented Programming_ (OOP) dalam 4 bahasa, yaitu `C++`, `Java`, `Python`, dan `PHP` dengan contoh implementasi dalam studi kasus berupa manajemen produk dalam sebuah **Toko Elektronik**.
Program ini mengimplementasikan konsep pewarisan _(inheritance)_ dengan 3 tingkatan kelas beserta fitur untuk menambahkan data ke dalam list produk.

## Desain Program

**1. Elektronik**
Kelas utama yang berisi atribut `id`, `nama`, `harga`, dan `gambar`. **(khusus PHP)**

**2. Perangkat**
Merupakan turunan dari kelas **Elektronik** yang berisi atribut `merek`, `kode_sku`, dan `garansi`.

**3. Laptop**
Merupakan turunan dari kelas **Perangkat** yang berisi atribut `cpu`, `gpu`, `ram`, `storage`.

## Alur Program
**1. Inisialisasi**
Program dijalankan dan data akan diisi dengan data awal berupa 5 laptop yang merupakan data dummy yang akan disimpan ke dalam array.

**2. Tampilan Awal**
Dalam `C++`,`Java`, dan `Python` menggunakan CLI sehingga ditampilkan menu untuk menunjukkan opsi yang tersedia seperti:
- Menampilkan data yang telah ada.
- Menambahkan data ke dalam tabel.
- Keluar dari program.

Sedangkan untuk `PHP`, program menampilkan halaman web dan menyajikan data dalam tabel dan form input sebagai penambah data.

Program yang menggunakan CLI akan terus berjalan apabila user tidak memilih opsi "0" (exit program), sementara untuk HTML user dapat menekan tombol Reset Data yang terletak di bagian atas kiri untuk mereset data kembali ke semula.
