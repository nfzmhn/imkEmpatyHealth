@extends("layouts.frontend")
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simpatico Health</title>
  <!-- <link rel="stylesheet" href="{{ asset('buatjanji/buatjanji.css') }}"> -->

  <link rel="stylesheet" href="{{ asset ('rekammedis/rekammedis.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<body>

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

      @forelse($riwayat as $data)
      <div class="history-card">
        <div class="history-date">
          <div class="date-container">
            <div class="logo-circle">
              <img src="{{ asset('lg/img/servis3.png') }}" alt="Logo Kesehatan" class="health-logo">
            </div>
          </div>
        </div>
        <div class="history-info">
          <!-- Format Tanggal -->
          <p class="tanggal">{{ $data->created_at->translatedFormat('d F Y') }}</p>
          <!-- Nama Dokter dan Spesialis -->
          <p class="jarak">
            <strong>{{ $data->reservasi->dokter->nama ?? 'Dokter Tidak Ditemukan' }}</strong> |
            {{ $data->reservasi->dokter->spesialis->nama_spesialis ?? 'Spesialis Tidak Tersedia' }}
          </p>
          <!-- Diagnosa -->
          <p class="jarak">Diagnosa: {{ $data->diagnosa }}</p>
        </div>
        <button class="forum-btn" data-link="{{ url('/chat-box') }}">Masuk Forum</button>
      </div>
      @empty
      <p>Tidak ada riwayat medis yang ditemukan.</p>
      @endforelse
    </section>
  </main>

  <footer class="footer">
    <div class="next-btn">&rarr;</div>
  </footer>

  <script src="{{ asset('rekammedis/rekammedis.js') }}"></script>
</body>

</html>