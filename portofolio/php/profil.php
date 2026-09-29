<!DOCTYPE html>

<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Khalindra Maulita Syafitri</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="header">
    <img src="imup.jpeg" alt="Foto Khalindra Maulita Syafitri" class="foto-profil">
    <h1>Khalindra Maulita Syafitri</h1>
    <p>Mahasiswi Sistem Informasi Universitas Tanjungpura</p>
  </header>

  <nav class="nav">
    <a href="#tentang">Tentang</a>
    <a href="#hobi">Hobi</a>
    <a href="#jadwal">Jadwal</a>
    <a href="#kontak">Kontak</a>
  </nav>

  <main class="konten">
    <section id="tentang">
      <h2>Tentang Saya</h2>
      <p>Halo! Saya Khalindra, mahasiswa yang sedang belajar membuat web dengan HTML dan CSS. Saya sangat suka traveling, tetapi saya tidak suka pergi sendirian.Warna favorit saya navy,hitam,coklat,abu-abu. Makanan favorit saya Mie Ayam,Sate,Nasi Goreng.</p>
      <p>Cita-cita saya ingin menjadi CEO.</p>
    </section>

    <section id="hobi">
      <h2>Daftar Hobi</h2>
      <ul class="list-hobi">
        <li>Traveling kemanapun</li>
        <li>Belanja</li>
        <li>Main Volly & Badminton</li>
        <li>Mendengarkan musik kalo kesepian</li>
      </ul>
    </section>

<section id="jadwal">
      <h2>Jadwal Pelajaran</h2>
      <table>
        <thead>
          <tr>
            <th>Hari</th>
            <th>Mata Pelajaran</th>
            <th>Jam</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="3">Senin</td>
            <td>Pemrograman Web Dasar</td>
            <td>08.20 – 10.00</td>
          </tr>
          <tr>
            <td>Basis Data</td>
            <td>10.20 – 12.50</td>
          </tr>
          <tr>
            <td>Kewarganegaraan</td>
            <td>13.30 – 15.10</td>
          </tr>
          <tr>
            <td rowspan="2">Selasa</td>
            <td>Praktikum Pemrograman Web Dasar</td>
            <td>10.20 – 13.10</td>
          </tr>
          <tr>
            <td>Manajemen Proyek SI</td>
            <td>13.30 – 15.10</td>
          <tr>
            <td rowspan="2">Rabu</td>
            <td>Aplikasi Multimedia</td>
            <td>07.30 – 10.00</td>
          </tr>
          <tr>
            <td>Rekayasa Perangkat Lunak</td>
            <td>10.20 – 12.50</td>
          </tr>
          <tr>
            <td rowspan="2">Kamis</td>
            <td>Pemrograman Berorientasi Objek</td>
            <td>10.20 – 12.00</td>
          </tr>
          <tr>
            <td>Kewirausahaan Teknologi Informasi</td>
            <td>13.30 – 15.10</td>
          </tr>
          <tr>
            <td rowspan="2">Jumat</td>
            <td>Manajemen Rantai Pasok</td>
            <td>07.30 – 10.00</td>
          </tr>
          <tr>
            <td>Praktikum Pemrograman Berorientasi Objek</td>
            <td>13.30 – 16.20</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section id="kontak">
      <h2>Formulir Kontak</h2>
      <form>
        <label for="nama">Nama</label>
        <input type="text" id="nama" placeholder="Tulis nama Anda">

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="nama@email.com">

        <label for="pesan">Pesan</label>
        <textarea id="pesan" rows="4" placeholder="Tulis pesan..."></textarea>

        <button type="submit">Kirim Pesan</button>
      </form>
    </section>
  </main>

  <footer class="footer">
    <p>&copy; 2026 Khalindra Maulita Syafitri. Dibuat dengan HTML &amp; CSS.</p>
  </footer>

</body>
</html>
