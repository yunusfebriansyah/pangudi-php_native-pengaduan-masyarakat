<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        .navbar {
            background-color: #f6f8fc; /* Warna putih kebiruan */
        }
        .navbar a {
            color: #4a4a68;
            font-weight: 600;
        }
        .navbar a:hover {
            color: #6366f1; /* Warna ungu */
        }
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(99, 102, 241, .8)), url('http://localhost/pengaduan-masyarakat/admin-template/assets/img/hero.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }
        .header {
            background-color: #f6f8fc;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header h1 {
            font-size: 2.5rem;
            color: #fff;
        }
        .header p {
            color: #fff;
        }
        .header .btn-primary {
            background-color: #6366f1; /* Warna ungu */
            border: none;
        }
        .header .btn-primary:hover {
            background-color: #4a4ae8;
        }
        .header .btn-outline-primary {
            border-color: #6366f1; /* Warna ungu */
            background: none;
            color: #fff;
        }
        .header .btn-outline-primary:hover {
            background-color: #6366f1;
        }
        .section {
            padding: 100px 0;
            background-color: #ffffff;
        }
        footer {
            background-color: #f6f8fc;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body id="home">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login-masyarakat.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Section -->
<header class="header" id="home">
    <div class="overlay"></div>
    <div class="container text-center">
        <h1>Selamat Datang di Pengaduan Masyarakat</h1>
        <p>Website untuk melaporkan keluhan dan pengaduan masyarakat.</p>
        <a href="login-masyarakat.php" class="btn btn-outline-primary btn-lg">Login Masyarakat</a>
        <a href="login-admin.php" class="btn btn-primary btn-lg">Login Petugas</a>
    </div>
</header>

<!-- About Section -->
<section class="section" id="about">
    <div class="container">
        <h2 class="text-center">Tentang Kami</h2>
        <p class="text-center">Kami menyediakan platform bagi masyarakat untuk menyampaikan pengaduan secara online.</p>
    </div>
</section>

<!-- Services Section -->
<section class="section bg-light" id="services">
    <div class="container">
        <h2 class="text-center">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <h4>Layanan Pengaduan</h4>
                <p>Anda dapat menyampaikan berbagai keluhan terkait pelayanan publik.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Pemantauan Proses</h4>
                <p>Ikuti perkembangan pengaduan Anda secara online.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Penyelesaian Masalah</h4>
                <p>Kami berkomitmen untuk menyelesaikan setiap pengaduan dengan cepat dan tepat.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section" id="contact">
    <div class="container">
        <h2 class="text-center">Kontak Kami</h2>
        <p class="text-center">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui formulir di bawah ini.</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Pengaduan Masyarakat. Pangudi Developer.</p>
</footer>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
