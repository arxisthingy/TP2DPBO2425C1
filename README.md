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

## Diagram

<img width="161" height="614" alt="diagram" src="https://github.com/user-attachments/assets/a3f1ee37-c0b0-4719-9d77-1bd42609f51f" />


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

## Dokumentasi Program
### C++

<img width="1457" height="688" alt="view" src="https://github.com/user-attachments/assets/296d4ce5-530a-4172-9d98-a112090dfaad" />

### Java

<img width="1458" height="652" alt="view" src="https://github.com/user-attachments/assets/a3773171-2a99-424c-972e-6a94605510e2" />

### Python

<img width="1452" height="653" alt="view" src="https://github.com/user-attachments/assets/0427c197-7924-483b-8451-472dbdf7a5b0" />

### PHP

<img width="1918" height="868" alt="View1" src="https://github.com/user-attachments/assets/7ad7476b-ed9f-48c7-8432-2042669b038d" />
<img width="1918" height="866" alt="view2" src="https://github.com/user-attachments/assets/b0c8426b-1553-41a1-9e10-29d2f15646cc" />


