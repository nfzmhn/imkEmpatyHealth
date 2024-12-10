<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="{{ asset('dokter/diagnosa.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="profile">
                <h2>{{ $reservasi->user->nama_depan }} {{ $reservasi->user->nama_belakang }}</h2>
                <p>{{ $reservasi->dokter->nama }} | {{ $reservasi->dokter->spesialis->nama_spesialis ?? 'Spesialisasi tidak tersedia' }}</p>
                <p>{{ $reservasi->created_at->format('d-m-Y') }}</p>
            </div>
        </div>

        <form class="form" method="POST" action="{{ route('diagnosa.store', ['id' => $reservasi->id_reservasi]) }}">
            @csrf
            <div class="row">
                <div class="column">
                    <label>Jenis Kelamin</label>
                    <input type="text" value="{{ $reservasi->user->jenis_kelamin }}" readonly>
                </div>
                <div class="column">
                    <label>Pekerjaan</label>
                    <input type="text" value="{{ $reservasi->user->pekerjaan }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Umur</label>
                    <input type="text" value="{{ $reservasi->user->umur }} Tahun" readonly>
                </div>
                <div class="column">
                    <label>Range Penghasilan</label>
                    <input type="text" value="{{ $reservasi->user->penghasilan }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" value="{{ $reservasi->user->pendidikan_terakhir }}" readonly>
                </div>
                <div class="column">
                    <label>Tunjangan</label>
                    <input type="text" value="{{ $reservasi->user->tunjangan }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Status Perkawinan</label>
                    <input type="text" value="{{ $reservasi->user->status_pernikahan }}" readonly>
                </div>
                <div class="column">
                    <label>Keluhan / Sakit yang dirasakan</label>
                    <textarea readonly>{{ $reservasi->keluhan }}</textarea>
                </div>
            </div>

            <div class="diagnosis">
                <label>Input Diagnosa Pasien</label>
                <textarea name="diagnosa" id="diagnosa" placeholder="Masukan Diagnosa" required></textarea>
                <button type="submit" class="diagnosis-btn">Input Diagnosa</button>
            </div>
        </form>
    </div>
</body>

</html>