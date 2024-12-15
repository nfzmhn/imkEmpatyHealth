@extends("layouts.frontend")
@section("content")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpatico Health</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('buatjanji/buatjanji.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header-title">
        <h1>REGISTRASI<br>JANJI DOKTER</h1>
    </section>

    <section id="buatjanji" class="py-5 bg-white">
        <div class="buatjanji">
            <div class="form-container">
                <div class="left">
                    <form id="form-janji" method="POST" action="{{ route('reservasi.store') }}">
                        @csrf <!-- Token CSRF wajib -->

                        <select id="spesialis" name="spesialis" class="form-control">
                            <option value="">Pilih Spesialis</option>
                            @foreach ($spesialis as $item)
                            <option value="{{ $item->id_spesialis }}">{{ $item->nama_spesialis }}</option>
                            @endforeach
                        </select>

                        <label for="dokter">Pilih Dokter:</label>
                        <select name="dokter_id" id="dokter" required>
                            <option value="">Pilih Dokter</option>
                        </select>

                        <label for="jadwal">Pilih Jadwal:</label>
                        <select name="jadwal_id" id="jadwal" required>
                            <option value="">Pilih Jadwal</option>
                            @foreach ($jadwals as $jadwal)
                            <option value="{{ $jadwal->id }}">{{ $jadwal->waktu }}</option>
                            @endforeach
                        </select>

                        <label for="keluhan">Keluhan:</label>
                        <textarea name="keluhan" id="keluhan" required></textarea>

                        <button type="submit" id="btn-submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Pop-up Modal -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <img src="{{ asset('lg/img/envelove.png') }}" alt="Icon" class="popup-icon">
            <h2>Terimakasih</h2>
            <p>Nama pasien sudah terdaftar</p>
            <span id="close-popup" class="close-popup">&times;</span>
        </div>
    </div>

    <script src="{{ asset('buatjanji/buatjanji.js') }}"></script>
</body>

</html>
@endsection