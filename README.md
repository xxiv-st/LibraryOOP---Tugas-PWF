Library OOP Mini

Project sederhana Pemrograman Berbasis Web (PWF) menggunakan konsep *Object-Oriented Programming* (OOP) di PHP untuk mensimulasikan sistem perpustakaan digital mini.

Struktur Class & File
`Book.php`: Class induk (parent class) yang menyimpan data umum buku (Judul dan Author).
`DigitalBook.php`: Class turunan (child class) dari `Book` yang menambahkan atribut ukuran file (`fileSize`).
`Member.php`: Class untuk mengelola data anggota perpustakaan dan proses peminjaman buku.
`index.php`: File utama untuk menguji dan menjalankan simulasi pembuatan objek serta transaksi peminjaman.