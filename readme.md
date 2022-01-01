# Toshokan Games
Toshokan Games adalah website yang dibagun untuk memberikan informasi games kepada user. Informasi tersebut terdiri dari tanggal rilis, direktur, produser, pengembang, platform, genre, system requirement, dan lain lainnya.

# Petunjuk Penggunaan
Untuk mengakses website uri awal adalah localhost jika user mengaksesnya secara loka.
segment(0) = toshokangames.
segment(1) = tgames untuk user umum, auth untuk login, dan menu untuk admin.
segment(2) = anak dari segment(1) yaitu halaman-halaman yang ada di menu tersebut.
```
http://localhost/toshokangames/tgames/list
```

# Halaman Projek
Pages yang tersedia di website ini ialah:
```
Halaman User
1. Home
2. List
3. Release
4. Genre
5. Pencarian
6. Konten

Halaman Auth
1. Login
2. Registrasi

Halaman Manu
1. Index
2. Profil
3. Tambah
4. Ubah
5. Detail_ubah
6. Hapus
7. Genre
8. Rating
```
Untuk mengakses halaman di atas user tinggal mengubah segment(2) dengan pilihan halaman di atas.
segment(1) = tgames/:
## Home
Halaman awal yang menampilkan slider games secara acak, games terbaru, games terfavorit, dan games yang baru di update.

## List
Halaman yang menampilkan semua games yang ada di database.

## Release
Halaman yang menampilkan games yang akan di rilis di kemudian hari.

## Genre
Halaman yang menampilkan genre genre games

## Pencarian
Halaman yang menampilkan hasil dari pencarian yang user cari di search bar.

## Konten
konten memiliki segment(3) di mana segment(3) adalah id games yang di pilih. Pada halaman ini akan di tampilkan informasi mengeni games yang dipilih.

segment(1) = auth/:
## Login
Halaman untuk masuk ke halaman menu. hanya bisa di akses sebelum user masuk dan ketika sesi login habis.

## Registrasi
Halaman untuk mendaftarkan diri jadi admin

segment(1) = menu/:
## Index
dashboard admin menampilkan total pengunjung, pengunjun hari ini, pengunjung yang online, total hits, dan menu menu lainnya

## Profil
halaman yang berfungsi untuk menampilkan dan mengubah informasi admin.

## Tambah
halaman untuk menambah informasi games.

## Ubah
Pada halaman ini hanya menampilkan semua games yang ada pada website ini dan memilih games tersebut untuk di ubah informasi nya.

## Detail_ubah
Halaman untuk mengubah informasi games.

## Hapus
Halaman untuk manghapus informasi games. 

## Genre
Halaman untuk menambah, mengubah, dan menghapus genre.

## Rating
Halaman untuk memberi rating pada games


# Prasyarat
Software yang harus sudah ada:
```
PHP version 5.6 atau yang terbaru.
Xampp
Browser
```

# Menginstal
Langkah pemasangan:

## Local
```
1. Copy file ke C:\xampp\htdocs\
2. Buka di browser
3. Buka http://localhost/phpmyadmin/ 
4. Klik import
5. Klik Choose File
6. Pilih database yang ada di folder Zip
7. Klik tombol go yang ada di bawah
8. Buka tab baru
9. Pada address bar masukan url http://localhost/toshokangames/
10. Website Website berhasil di akses
```

# Dibangun dengan
1. HTML + CSS + JavaScript + PHP + MySql 
2. Framework PHP yaitu CodeIgniter
3. Bootstrap
4. SB-Admin untuk menu admin
5. CK-Editor untuk menampilkan teks sesua dengan apa yang kita ketik WYSIWYG

# Profil Anggota Proyek
* Muhammad Nashir Mudzakir - 1706098 - Informatika C 2017 - Pembangun Website Toshokan Games
* Fajar Shidiq Gimnastiar - 1706075 - Informatika C 2017

# Lisensi

MIT License

Copyright (c) 2020 Muhammad Nashir Mudzakir

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

# Ucapan Terima Kasih
Terima kasih kepada :
    1. Bapak Ade Sutedi selaku dosen yang memberi tugas ini.
    2. Bapak Sandika Galih dari web programming unpas selaku orang yang dijadikan acuan dalam pengembangan website ini.
    3. [StackOverflow] (https://stackoverflow.com/) selaku situs rujukan jika terdapatnya error pada saat pengembangan webiste ini.
    4. Dan situs situs tutorial lainnya yang membantu memberika ilmu pada penulis untuk membangun fitur fitur yang ada.

    