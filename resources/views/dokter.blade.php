<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien Terdaftar</title>
    <link rel="stylesheet" href="{{ asset('dokter/dokter.css') }}">
</head>

<body>
    <div class="container">
        <h1>PASIEN TERDAFTAR</h1>

        @foreach($reservasi as $data)
        <div class="card">
            <div class="info">
                <div class="icon">
                    <img src="{{ url('lg/img/userprofile.png') }}" alt="User Profile" />
                </div>
                <div class="details">
                    <h2>{{ $data->user->nama_depan }} {{ $data->user->nama_belakang }}</h2>
                    <p>{{ $data->dokter->nama }} | {{ $data->dokter->spesialis->nama_spesialis ?? 'Spesialisasi tidak tersedia' }}</p>
                    <p>{{ $data->keluhan }}</p>
                    <p>{{ $data->created_at->format('d-m-Y') }}</p>
                </div>
            </div>
            <a class="diagnosis-btn" href="{{ url('/diagnosa') }}" style="text-decoration: none;">Input Diagnosa</a>
        </div>
        @endforeach

    </div>
</body>

</html>
