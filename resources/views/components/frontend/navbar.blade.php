<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Pratama</title>
    <link rel="stylesheet" href={{url("/navbar/navbar.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('lg/img/Logo medybudy.png') }}" alt="Klinik Pratama" class="navLogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="../profiluser/profiluser.html">
                        <p class="mb-0">Tuan Zidni Nurfauzi</p>
                        <img src="../lg/img/userprofile.png" class="rounded-circle user-icon ms-2">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

