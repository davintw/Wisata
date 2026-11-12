<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- memberi judul -->
        <title>
            SIWA | Sistem Informasi Wisata
        </title>
    </head>
    <body>
        <header class="header">
            <img src="assets\images\logo wisataa .png" alt="logo siwa" width=100px
            <h1 class="site-title">
                SISTEM INFORMASI
            </h1>
            <p class="site-tagline">
                Sistem Informasi Wisata Indonesia
            </p>
            <nav class="navbar">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Media</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Kontak</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <section class="hero">
                <div class="hero-content">
                    <h2 class="hero-title">
                        Jelajahi Wisata Terbaik di Indonesia
                    </h2>
                    <p class="hero-description">
                        Temukan destinasi wisata terbaik dengan
                        informasi lengkap, mudah, dan terpercaya.
                    </p>
                    <button class="hero-button">
                        Jelajahi Sekarang
                    </button>
                </div>
                <div class="hero-image">
                    <img
                        src="assets/images/hero.jpg"
                        alt="Pemandangan Wisata Indonesia"
                        class="hero-img"
                        width="500">
                </div>
            </section>
            <section class="destinations">
                <div class="container">
                    <h2 class="section-title">
                        Destinasi Wisata
                    </h2>
                    <p class="section-description">
                        Jelajahi berbagai destinasi wisata
                        terbaik di Indonesia.
                    </p>
                    <div class="destination-list">
                        <article class="destination-card">
                            <img
                                src="assets\images\unduhan.webp"
                                alt="Pantai Kuta"
                                class="destination-image">
                            <h3 class="destination-title">
                                Pantai Kuta
                            </h3>
                            <p class="destination-text">
                                Pantai terkenal di Bali dengan
                                pemandangan matahari terbenam yang indah.
                            </p>
                            <a href="#" class="btn-detail">
                                Lihat Detail
                            </a>
                        </article>
                        <article>
                            <img 
                                src="assets\images\Gunung-Bromo.webp"
                                alt="Gunung Bromo"
                                class="destination-image">
                            <h3 class="destination-title">
                                Gunung Bromo
                            </h3>
                            <p class="destination-text">
                                Gunung Bromo atau dalam bahasa Tengger dieja "Brama", juga disebut Kaldera Tengger, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia.
                            </p>
                            <a href="#" class="btn-detail">
                                Lihat Detail
                            </a>
                        </article>
                        <article>
                            <img 
                                src="assets\images\Candi-Borubudur.webp" 
                                alt="Candi Borubudur"
                                class="destination-img">
                            <h3 class"destination-title">
                                Candi Borubudur
                            </h3>
                            <p class="destination-text">
                               Candi Borobudur dibangun sekitar abad ke-8 hingga ke-9 Masehi pada masa Dinasti Syailendra, semasa pemerintahan Raja Samaratungga dan putrinya Pramodhawardhani. 
                            </p>
                            <a href="" class="btn-detail">
                                Lihat Detail
                            </a>
                        </article>
                        <article>
                            <img
                                src="assets\images\Semedo.webp"
                                alt="Semedo"
                                class="destination-img">
                            <h3 class="destination-title">
                                Museum Semedo
                            </h3>    
                            <p class="destination-text">
                                Museum Situs Semedo terletak di Desa Semedo, Kecamatan Kedungbanteng, Kabupaten Tegal dan menyimpan ribuan fosil manusia purba, fauna, dan artefak prasejarah 
                            </p>
                            <a href="" class="btn-detail">
                                Lihat Detail
                            </a>
                        </article>
                    </div>
                </div>
            </section>
            <section class="media">
                <div class="container">
                    <h2 class="section-title">
                        Media Wisata
                    </h2>
                    <p class="section-description">
                        Nikmati audio, video, dan lokasi destinasi wisata.
                    </p>
                    <!-- Pembungkus Utama -->
                    <div class="media-content">
                    <!-- Komponen 1: Audio Wisata -->
                    <div class="media-audio">
                        <h3>Audio Wisata</h3>
                        <audio controls class="audio-player">
                        <source src="assets\audio\audio_nikmat.mp3" type="audio/mp3">
                        Browser Anda tidak mendukung audio.
                        </audio>
                    </div>
                    <!-- Komponen 2: Video Wisata -->
                    <div class="media-video">
                        <h3>Video Wisata</h3>
                        <video controls class="video-player" width="500">
                        <source src="assets\video\video_candi.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                        </video>
                    </div>
                    <!-- Komponen 3: Peta Google Maps Embed -->
                    <div class="media-map">
                        <h3>Lokasi Wisata</h3>
                        <iframe
                        class="map-frame"
                        src="https://www.google.com/maps/embed?pb=..."
                        width="600"
                        height="400"
                        loading="lazy">
                        </iframe>
                    </div>
                </div>
            </section>
            <section class="contact">
                <div class="container">
                    <h2 class="section-title">Hubungi Kami</h2>
                    <p class="section-description">
                        Silakan hubungi kami apabila membutuhkan 
                        informasi lebih lanjut.
                    </p>
                    <div class="contact-content">
                        <address class="contact-address">
                            Jl. Wisata Indonesia No. 10 <br>
                            Magelang <br>
                            Jawa Tengah
                        </address>

                        <p class="contact-phone">
                            Telepon :
                            <a href="tel:+6281234567890">0812-3456-7890</a>
                        </p>

                        <p class="contact-email">
                            Email :
                            <a href="mailto:info@siwa.id">info@siwa.id</a>
                        </p>

                        <p class="contact-hours">
                            Jam Operasional <br>
                            Senin - Jumat <br>
                            08.00 - 16.00 WIB
                        </p>
                    </div>
                </div>
            </section>
            <section class="information">
                <div class="container">
                    <h2 class="section-title">
                        Informasi Wisata
                    </h2>
                    <p class="section-description">
                        Berikut Informasi Harga Tiket Dan Jam Operasional
                    </p>
                    <h3 class="table-title">
                        Harga Tiket
                    </h3>
                    <table border="1" width="100%" class="info-table">
                        <tr>
                            <th>
                                Jenis Tiket
                            </th>
                            <th>
                                Harga
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Dewasa
                            </td>
                            <td>
                                Rp25.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Anak-anak
                            </td>
                            <td>
                                Rp15.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lansia
                            </td>
                            <td>
                                Rp10.000
                            </td>
                        </tr>
                    </table>
                    <h3 class="table-title">
                        Jam Operasional
                    </h3>
                    <table border="1" width="100%"class="info-table">
                        <tr>
                            <th>
                                Hari
                            </th>
                            <th>
                                Jam Operasional
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Senin - Jumat
                            </td>
                            <td>
                                08.00 - 16.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Sabtu
                            </td>
                            <td>
                                08.00 - 17.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Minggu
                            </td>
                            <td>
                                08.00 - 18.00
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class="information-list">
                <div class="container">
                    <h2 class="section-title">Informasi Tambahan</h2>
                    <p class="section-description">
                        Ketahui fasilitas, peraturan, dan cara melakukan pemesanan tiket wisata.
                    </p>
                    <div class="facility">
                        <h3 class="list-title">
                            Fasilitas Wisata
                        </h3>
                        <ul class="facility-list">
                            <li>
                                Area Parkir
                            </li>
                            <li>
                                Mushola
                            </li>
                            <li>
                                Toilet
                            </li>
                            <li>
                                Restoran
                            </li>
                            <li>
                                Spot Foto
                            </li>
                        </ul>
                    </div>
                    <div class="rules">
                        <h3 class="list-title">
                            Peraturan Pengunjung
                        </h3>
                        <ul class="rules-list">
                            <li>
                                Menjaga kebersihan area wisata.
                            </li>
                            <li>
                                Tidak membuang sampah sembarangan.
                            </li>
                            <li>
                                Tidak merusak fasilitas umum.
                            </li>
                            <li>
                                Mengikuti petunjuk dari petugas.
                            </li>
                        </ul>
                    </div>
                    <div class="booking-step">
                        <h3 class="list-title">
                            Cara Pemesanan Tiket
                        </h3>
                        <ol class="booking-list">
                            <li>
                                Pilih destinasi wisata.
                            </li>
                            <li>
                                Tentukan tanggal kunjungan.
                            </li>
                            <li>
                                Siapkan identitas diri.
                            </li>
                            <li>
                                Lakukan pembayaran di loket.
                            </li>
                            <li>
                                Nikmati perjalanan wisata.
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
            <section class="booking">
                <div class="container">
                    <h2 class="section-title">
                        Form Pemesanan Tiket
                    </h2>
                    <p class="section-description">
                        Silakan isi formulir berikut untuk melakukan pemesanan tiket wisata.
                    </p>
                    <form class="booking-form">
                        <div class="form-group">
                            <label for="fullname">
                                Nama Lengkap :
                            </label>
                            <br>
                            <input type="text" id="fullname" class="form-control"
                                placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email :
                            </label>
                            <br>
                            <input type="email" id="email" class="form-control"
                                placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                Nomor HP :
                            </label>
                            <br>
                            <input type="tel" id="phone" class="form-control"
                                placeholder="08xxxxxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label for="destination">
                                Pilih Destinasi :
                            </label>
                            <br>
                            <select id="destination" class="form-control">
                                <option>
                                    Pantai Kuta
                                </option>
                                <option>
                                    Gunung Bromo
                                </option>
                                <option>
                                    Candi Borobudur
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="visit-date">
                                Tanggal Kunjungan :
                            </label>
                            <br>
                            <input type="date" id="visit-date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ticket">
                                Jumlah :
                            </label>
                            <br>
                            <input type="number" id="ticket" class="form-control"
                                min="1" max="10"placeholder="Masukkan jumlah tiket" required>
                        </div>
                        <div class="form-group">
                            <label for="note">
                                Catatan :
                            </label>
                            <br>
                            <textarea id="note" class="form-control" rows="5" cols="100"
                                    placeholder="Tulis catatan tambahan">
                                </textarea>
                        </div>
                        <button type="submit" class="btn-submit">
                            Pesan Tiket
                        </button>
                    </form>     
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <h2 class="footer-title">
                    SIWA
                </h2>
                <p class="footer-description">
                    &copy; 2026 SIWA. Semua Hak Dilindungi
                </p>
                <h3 class="footer-subtitle">
                    Quick Links
                </h3>
                <ul class="footer-links">
                    <li class="footer-item">
                        <a href="#" class="footer-links">
                            Beranda
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-links">
                            Destinasi
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-links">
                            Media
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-links">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>