@extends("layouts.frontend")
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <!-- <link rel="stylesheet" href="{{ asset('buatjanji/buatjanji.css') }}"> -->

    <link rel="stylesheet" href="{{ asset ('rekammedis/rekammedis.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">

                <img src="{{ asset('lg/img/Logo medybudy.png') }}" alt="Simpatico Health" class="navlogo"> Simpatico Health
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../halamanutama/halamanutama.html">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="../halamanutama/informasi.html">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="../lg/service/service.html">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="../profiluser/profiluser.html">
                            <p class="mb-0">Tuan Zidni Nurfauzi</p>
                            <img src="{{ asset('lg/img/Ellipse 8.png') }}" class="rounded-circle user-icon ms-2">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
    <section class="profile-section">
        <div class="profile-box">
            <div class="profile-info">
                <!-- Gambar Profil -->
                <div class="profile-pic">
                    <img src="{{ Auth::user()->profile_picture ?? asset('lg/img/Person.png') }}" alt="Profile">
                </div>

                <!-- Detail Profil -->
                <div class="profile-details">
                    <!-- Nama Pengguna -->
                    <h2 class="profile-name">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</h2>

                    <!-- ID dan Umur Pengguna -->
                    <p>ID: {{ Auth::user()->id }} || Umur: {{ Auth::user()->umur ?? 'Umur Tidak Tersedia' }} Tahun</p>

                </div>
            </div>
        </div>
    </section>


          <section class="history-section">
            <h2>Riwayat Pasien</h2>
            <div class="history-card">
              <div class="history-date">
                <div class="date-container">
                  <div class="logo-circle">
                    <img src="{{ asset('lg/img/servis3.png') }}" alt="Logo Kesehatan" class="health-logo">
                  </div>
                </div>
              </div>
              <div class="history-info">
                <p class="tanggal">12 MARET 2023</p>
                <p class="jarak"><strong>dr. Pikmi</strong> | Spesialis THT</p>
                <p class="jarak">Diagnosa : Gangguan Fungsi Telinga</p>
              </div>
              <button class="forum-btn" data-link="{{ url('/chat-box')}}">Masuk Forum</button>
            </div>
            <div class="history-card">
              <div class="history-date">
                <div class="date-container">
                  <div class="logo-circle">
                    <img src="{{ asset('lg/img/servis3.png') }}" alt="Logo Kesehatan" class="health-logo">
                  </div>
                </div>
              </div>
              <div class="history-info">
                <p class="tanggal">13 Februari 2023</p>
                <p class="jarak"><strong>dr. Hary Suryapranata</strong> | Spesialis Jantung</p>
                <p class="jarak">Diagnosa : Serangan Jantung Ringan</p>
              </div>
              <button class="forum-btn" data-link="{{ url('/chat-box')}}">Masuk Forum</button>
            </div>
            <div class="history-card">
              <div class="history-date">
                <div class="date-container">
                  <div class="logo-circle">
                    <img src="{{ asset('lg/img/servis3.png') }}" alt="Logo Kesehatan" class="health-logo">
                  </div>
                </div>
              </div>
              <div class="history-info">
                <p class="tanggal">2 Desember 2022</p>
                <p class="jarak"><strong>dr. Ichsan Budiono</strong> | Spesialis Alergi</p>
                <p class="jarak">Diagnosa : Alergi Debu</p>
              </div>
              <button class="forum-btn" data-link="{{ url('/chat-box')}}">Masuk Forum</button>
            </div>
          </section>
      </main>

      <footer class="footer">
        <div class="next-btn">&rarr;</div>
      </footer>

      <script src="{{ asset('rekammedis/rekammedis.js') }}"></script>
</body>
</html>
