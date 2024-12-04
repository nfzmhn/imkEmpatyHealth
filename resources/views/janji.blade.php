@extends("layouts.frontend")
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medy Budy</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('buatjanji/buatjanji.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header-title">
        <h1>REGISTRASI<br>JANJI KLINIK</h1>
    </section>

    <section id="buatjanji" class="py-5 bg-white">
        <div class="buatjanji">
            <div class="form-container">
                <div class="left">
                    <!-- Form untuk memilih spesialis -->
                    <form method="GET" action="{{ route('reservasi.index') }}">
                        <select name="spesialis_id" id="spesialis" onchange="this.form.submit()">
                            <option value="">Pilih Spesialis Dokter</option>
                            @foreach ($spesialis as $item)
                            <option value="{{ $item->id_spesialis }}" {{ request()->get('spesialis_id') == $item->id_spesialis ? 'selected' : '' }}>
                                {{ $item->nama_spesialis }}
                            </option>
                            @endforeach
                        </select>
                    </form>

                    <!-- Dropdown untuk memilih dokter -->
                    <select name="dokter_id" id="dokter">
                        <option>Pilih Dokter</option>
                        @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                        @endforeach
                    </select>

                    <!-- Dropdown untuk memilih jadwal -->
                    <select name="jadwal_id" id="jadwal">
                        <option>Pilih Jadwal</option>
                        @foreach ($jadwals as $jadwal)
                        <option value="{{ $jadwal->id_jadwal_dokter }}">
                            {{ $jadwal->nama_jadwal }} - {{ $jadwal->jadwal }}
                        </option>
                        @endforeach
                    </select>

                    <div class="right">
                        <label for="keluhan">Keluhan/Sakit yang dirasakan</label>
                        <textarea name="keluhan" id="keluhan" placeholder="Jawaban Anda"></textarea>
                        <button id="btn-submit" type="submit">Submit</button>
                    </div>
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